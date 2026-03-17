# About

A tutorial project covering various server-side functions and implementing them using ExpressJS and MongoDB.

# Project Structure

```
express-api/
├── src/
│   ├── app.ts                      # The main application file
│   ├── server.ts                   # Run Server
│   ├── config/
│   │   ├── database.config.ts      # Config DB
│   │   └── env.config.ts           # Environment variables
│   ├── routes/                     # All routes
│   │   ├── auth/
│   │   ├── users/
│   │   └── api.ts                  # United all routes
│   ├── controllers/                # Controllers (request handlers)
│   │   ├── auth.controller.ts
│   │   └── users.controller.ts
│   ├── services/                   # Business logic
│   │   ├── auth.service.ts
│   │   └── user.service.ts
│   ├── middleware/                 # Intermediate handlers
│   │   ├── auth.middleware.ts
│   │   └── error.middleware.ts
│   ├── models/                     # Data models
│   │   ├── User.model.ts
│   │   └── Product.model.ts
│   ├── utils/                      # Auxiliary functions
│   │   ├── logger.ts
│   │   └── validators.ts
│   └── types/                      # TypeScript types
│       └── index.ts
├── package.json
├── tsconfig.json
└── .env
```
