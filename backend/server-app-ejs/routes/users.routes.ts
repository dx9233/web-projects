import { Router } from "express";
import { getProfile, updateProfile } from "../controllers/auth.controller";
import {
  getUsers,
  getUserById,
  updateUser,
  deleteUser,
} from "../controllers/user.controller";
import { authenticate, authorize } from "../middleware/auth.middleware";

const router = Router();

// Все маршруты ниже требуют аутентификации
router.use(authenticate);

// Маршруты для текущего пользователя
router.get("/profile", getProfile);
router.put("/profile", updateProfile);

// Админские маршруты (только для админов)
router.use(authorize("admin"));

router.get("/", getUsers);
router.get("/:id", getUserById);
router.put("/:id", updateUser);
router.delete("/:id", deleteUser);

export default router;
