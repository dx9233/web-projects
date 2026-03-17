import express, { Request, Response } from "express";

const app = express();

app.get("/", (_req: Request, res: Response) => {
  res.send("Hello from Express API!");
});

app.listen(3001, () => {
  console.log("Express API running at http://localhost:3001");
});
