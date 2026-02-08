# Web Projects Monorepo

- [Project Structure](#project-structure)
- [Running and building locally](#running-and-building-locally)
- [Tech Stack](#tech-stack)
- [Projects](#projects)

---

## Project Structure

```
monorepo/
  bots/
  backend/
    django-app/
    laravel-app/
    server-app-ejs/
  mobile/
    carrent-app/ RN app
  packages/
    ui/
    utils/
  web/
    astro/
      astroblog/ # AstroJS Blog
      astroblogportfolio/ # AstroJS Blog Portfolio
    react/
      luxurycar-react/ # React landing
      nextjs-portfolio/
      strikethehub/ # React Game Portal
  package.json
  pnpm-workspace.yaml
  turbo.json
  tsconfig.json
  pnpm-lock.yaml
```

---

## Running and building locally

### All projects at once

| Script                 | Description                         |
| ---------------------- | ----------------------------------- |
| **pnpm install:all**   | Installing all dependencies         |
| **pnpm install:php**   | Installing all dependencies **PHP** |
| **pnpm install:js**    | Installing all dependencies **JS**  |
| **pnpm build:all**     | Build all projects                  |
| **pnpm build:laravel** | Build **Laravel**                   |
| **pnpm build:js**      | Build all JS-projects               |
| **pnpm dev:all**       | All dev servers                     |
| **pnpm dev:laravel**   | Dev server **Laravel**              |
| **pnpm dev:next**      | Dev server **Next**                 |
| **pnpm dev:react**     | Dev server **React**                |
| **pnpm dev:astro**     | Dev server **Astro**                |

### One project

```bash
pnpm turbo run dev --filter=astro-app
pnpm turbo run build --filter=next-app
```

Check the list of available projects:

```bash
pnpm list -r
```

### Dev server Laravel

```bash
php artisan serve
```

---

## Tech Stack

<p align="left">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/astro/astro-original.svg" width="40" height="40" alt="Astro" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" width="40" height="40" alt="React" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" width="40" height="40" alt="Next" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" height="40" alt="JavaScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" width="40" height="40" alt="TypeScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" alt="Laravel" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40" height="40" alt="PHP" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" width="40" height="40" alt="Sqlite" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" width="40" height="40" alt="Python" />
  <!--<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg" width="40" height="40" alt="Wordpress" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="40" height="40" alt="MySql" />
   -->
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vite/vite-original.svg" width="40" height="40" alt="Vite" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" width="40" height="40" alt="Composer" />
</p>

## Projects

|     | Projects               | Stack                    | Discription                   | Demo     | Folder                                 |
| --- | ---------------------- | ------------------------ | ----------------------------- | -------- | -------------------------------------- |
| 1   | **django-app**         | Django, Python           | Backend Django app            | [Demo]() | [Link](/backend/django-app/)           |
| 2   | **laravel-app**        | PHP, SQL, Laravel        | Backend Laravel app           | [Demo]() | [Link](/backend/laravel-app/)          |
| 3   | **server-app-ejs**     | TS, JS, Express          | Express backend app           | [Demo]() | [Link](/backend/server-app-ejs/)       |
| 4   | **carrent-app**        | React Native, TS, Kotlin | Car rent mobile app           | [Demo]() | [Link](/mobile/carrent-app/)           |
| 5   | **astroblog**          | Astro, TypeScript        | Astro blog template           | [Demo]() | [Link](/web/astro/astroblog/)          |
| 6   | **astroblogportfolio** | Astro, TypeScript        | Astro blog-portfolio template | [Demo]() | [Link](/web/astro/astroblogportfolio/) |
| 7   | **luxurycar-react**    | React                    | React landing page            | [Demo]() | [Link](/web/react/luxurycar-react/)    |
| 8   | **strikethehub**       | React                    | Gaming Portal                 | [Demo]() | [Link](/web/react/strikethehub/)       |
| 9   | **nextjs-portfolio**   | React, Next, TS          | Main portfolio                | [Demo]() | [Link](/web/react/nextjs-portfolio/)   |
