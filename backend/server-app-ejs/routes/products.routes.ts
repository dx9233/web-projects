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

// Публичные маршруты (не требуют аутентификации)
router.get("/", getProducts);
router.get("/:id", getProductById);

// Защищенные маршруты
router.use(authenticate);

// Создание продукта (только админы)
router.post("/", authorize("admin"), validateProduct, createProduct);

// Обновление и удаление продукта (только админы)
router
  .route("/:id")
  .put(authorize("admin"), validateProduct, updateProduct)
  .delete(authorize("admin"), deleteProduct);

export default router;
