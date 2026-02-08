# About

Учебный проект, охватывающий всевозможные функции на стороне сервера и реализация их с помощью ExpressJS и MongoDB.

# Project Structure

```
express-api/
├── src/
│   ├── app.ts                      # Главный файл приложения
│   ├── server.ts                   # Запуск сервера
│   ├── config/
│   │   ├── database.config.ts      # Конфиг БД
│   │   └── env.config.ts           # Переменные окружения
│   ├── routes/                     # Все маршруты
│   │   ├── auth/
│   │   ├── users/
│   │   └── api.ts                  # Объединяет все роутеры
│   ├── controllers/                # Контроллеры (обработчики запросов)
│   │   ├── auth.controller.ts
│   │   └── users.controller.ts
│   ├── services/                   # Бизнес-логика
│   │   ├── auth.service.ts
│   │   └── user.service.ts
│   ├── middleware/                 # Промежуточные обработчики
│   │   ├── auth.middleware.ts
│   │   └── error.middleware.ts
│   ├── models/                     # Модели данных
│   │   ├── User.model.ts
│   │   └── Product.model.ts
│   ├── utils/                      # Вспомогательные функции
│   │   ├── logger.ts
│   │   └── validators.ts
│   └── types/                      # TypeScript типы
│       └── index.ts
├── package.json
├── tsconfig.json
└── .env
```