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

// All routes below require authentication.
router.use(authenticate);

// Routes for the current user
router.get("/profile", getProfile);
router.put("/profile", updateProfile);

// Administrator routes (administrators only)
router.use(authorize("admin"));

router.get("/", getUsers);
router.get("/:id", getUserById);
router.put("/:id", updateUser);
router.delete("/:id", deleteUser);

export default router;
