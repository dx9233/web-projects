# Web Projects Monorepo

- [Project Structure](#project-structure)
- [Running and building locally](#running-and-building-locally)
- [Tech Stack](#tech-stack)
- [Projects](#projects)

---

## Project Structure

```
monorepo/
  backend/
    laravel-app/
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
    other/
      beauty-salon/ Vue App
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
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" width="40" height="40" alt="Vue" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" height="40" alt="JavaScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" width="40" height="40" alt="TypeScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" alt="Laravel" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40" height="40" alt="PHP" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" width="40" height="40" alt="Sqlite" />
 <!-- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" width="40" height="40" alt="Python" /> -->
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vite/vite-original.svg" width="40" height="40" alt="Vite" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" width="40" height="40" alt="Composer" />
</p>

## Projects

|     | Projects               | Stack                    | Discription                   | Demo     | Folder                                 |
| --- | ---------------------- | ------------------------ | ----------------------------- | -------- | -------------------------------------- |
| 1   | **laravel-app**        | PHP, SQL, Laravel        | Backend Laravel app           | [Demo]() | [Link](/backend/laravel-app/)          |
| 2   | **carrent-app**        | React Native, TS, Kotlin | Car rent mobile app           | [Demo]() | [Link](/mobile/carrent-app/)           |
| 3   | **astroblog**          | Astro, TypeScript        | Astro blog template           | [Demo]() | [Link](/web/astro/astroblog/)          |
| 4   | **astroblogportfolio** | Astro, TypeScript        | Astro blog-portfolio template | [Demo]() | [Link](/web/astro/astroblogportfolio/) |
| 5   | **luxurycar-react**    | React                    | React landing page            | [Demo]() | [Link](/web/react/luxurycar-react/)    |
| 6   | **strikethehub**       | React                    | Gaming Portal                 | [Demo]() | [Link](/web/react/strikethehub/)       |
| 7   | **nextjs-portfolio**   | React, Next, TS          | Main portfolio                | [Demo]() | [Link](/web/react/nextjs-portfolio/)   |
| 8   | **beauty-salon**       | Vue                      | Beauty salon Vue App          | [Demo]() | [Link](/web/other/beauty-salon/)       |
