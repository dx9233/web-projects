import express, { Request, Response } from "express";
import path from "path";
import cors from "cors";

const app = express();

// Middleware
app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Статические файлы
app.use(express.static(path.join(__dirname, "./frontend")));
app.use("/admin", express.static(path.join(__dirname, "./admin")));

// Временные данные для тестирования
let users = [
  { id: 1, name: "John Doe", email: "john@example.com" },
  { id: 2, name: "Jane Smith", email: "jane@example.com" },
];

// Простые маршруты API
app.get("/api/users", (req: Request, res: Response) => {
  res.json(users);
});

app.post("/api/users", (req: Request, res: Response) => {
  const newUser = {
    id: users.length + 1,
    ...req.body,
  };
  users.push(newUser);
  res.status(201).json(newUser);
});

// Основной маршрут
app.get("/api", (req: Request, res: Response) => {
  res.json({
    message: "API работает!",
    status: "OK",
    timestamp: new Date().toISOString(),
  });
});

// SPA маршрутинг
app.get("*", (req: Request, res: Response) => {
  if (req.path.startsWith("/api")) {
    return res.status(404).json({ error: "Not found" });
  }

  if (req.path.startsWith("/admin")) {
    return res.sendFile(path.join(__dirname, "./admin/index.html"));
  }

  res.sendFile(path.join(__dirname, "./frontend/index.html"));
});

const PORT = process.env.PORT || 3001;
app.listen(PORT, () => {
  console.log(`🚀 Сервер запущен: http://localhost:${PORT}`);
});
