// src/services/userService.ts
export interface User {
  id: number;
  email: string;
  name: string;
  password?: string;
  role: "user" | "admin";
}

// Временное хранилище в памяти
const users: User[] = [
  { id: 1, email: "admin@example.com", name: "Admin", role: "admin" },
  { id: 2, email: "user@example.com", name: "User", role: "user" },
];

export class UserService {
  static async getAll(): Promise<User[]> {
    return users.map(({ password, ...user }) => user);
  }

  static async getById(id: number): Promise<User | null> {
    const user = users.find((u) => u.id === id);
    if (!user) return null;
    const { password, ...userWithoutPassword } = user;
    return userWithoutPassword;
  }

  static async create(userData: Omit<User, "id">): Promise<User> {
    const newUser = {
      id: users.length + 1,
      ...userData,
    };
    users.push(newUser);
    return newUser;
  }
}
