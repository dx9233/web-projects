import express, { Request, Response } from "express";
import path from "path";
import cors from "cors";

const app = express();

// Middleware
app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Static files
app.use(express.static(path.join(__dirname, "./frontend")));
app.use("/admin", express.static(path.join(__dirname, "./admin")));

// Temporary data for testing
let users = [
  { id: 1, name: "John Doe", email: "john@example.com" },
  { id: 2, name: "Jane Smith", email: "jane@example.com" },
];

// Simple API routes
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

// Main route
app.get("/api", (req: Request, res: Response) => {
  res.json({
    message: "API working!",
    status: "OK",
    timestamp: new Date().toISOString(),
  });
});

// SPA routing
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
  console.log(`Server Run: http://localhost:${PORT}`);
});
