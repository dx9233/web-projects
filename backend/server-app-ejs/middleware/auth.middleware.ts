import { Request, Response, NextFunction } from "express";
import jwt from "jsonwebtoken";
import User from "../src/models/User.model";
import { AuthRequest, JwtPayload } from "../src/types";

// Аутентификация по JWT токену
export const authenticate = async (
  req: AuthRequest,
  res: Response,
  next: NextFunction,
): Promise<void> => {
  try {
    const token = req.header("Authorization")?.replace("Bearer ", "");

    if (!token) {
      res.status(401).json({
        success: false,
        error: "Access denied. No token provided.",
      });
      return;
    }

    // Верификация токена
    const decoded = jwt.verify(
      token,
      process.env.JWT_SECRET || "your-secret-key",
    ) as JwtPayload;

    // Находим пользователя
    const user = await User.findById(decoded.userId).select("-password");

    if (!user) {
      res.status(401).json({
        success: false,
        error: "Invalid token. User not found.",
      });
      return;
    }

    if (!user.isActive) {
      res.status(403).json({
        success: false,
        error: "Account is deactivated.",
      });
      return;
    }

    // Добавляем пользователя в запрос
    req.user = user;
    next();
  } catch (error) {
    if (error instanceof jwt.JsonWebTokenError) {
      res.status(401).json({
        success: false,
        error: "Invalid token.",
      });
    } else if (error instanceof jwt.TokenExpiredError) {
      res.status(401).json({
        success: false,
        error: "Token expired.",
      });
    } else {
      console.error("Auth middleware error:", error);
      res.status(500).json({
        success: false,
        error: "Internal server error",
      });
    }
  }
};

// Авторизация по ролям
export const authorize = (...roles: string[]) => {
  return (req: AuthRequest, res: Response, next: NextFunction): void => {
    if (!req.user) {
      res.status(401).json({
        success: false,
        error: "Not authenticated",
      });
      return;
    }

    if (!roles.includes(req.user.role)) {
      res.status(403).json({
        success: false,
        error: `Access denied. Required roles: ${roles.join(", ")}`,
      });
      return;
    }

    next();
  };
};
