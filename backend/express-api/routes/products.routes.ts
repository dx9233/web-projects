import { Router } from "express";
import {
  getProducts,
  getProductById,
  createProduct,
  updateProduct,
  deleteProduct,
} from "../controllers/product.controller";
import { authenticate, authorize } from "../middleware/auth.middleware";
import { validateProduct } from "../middleware/validation.middleware";

const router = Router();

// Public routes (do not require authentication)
router.get("/", getProducts);
router.get("/:id", getProductById);

// Protected routes
router.use(authenticate);

// Product creation (admins only)
router.post("/", authorize("admin"), validateProduct, createProduct);

// Updating and deleting a product (admins only)
router
  .route("/:id")
  .put(authorize("admin"), validateProduct, updateProduct)
  .delete(authorize("admin"), deleteProduct);

export default router;
