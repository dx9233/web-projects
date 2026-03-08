# Web Projects Monorepo

- [Project Structure](#project-structure)
- [Running and building locally](#running-and-building-locally)
- [Tech Stack](#tech-stack)
- [Projects](#projects)

---

## Project Structure

```
monorepo/
  mobile/
    carrent-app/
  packages/
    ui/
    utils/
  screenshoots/
  web/
    astroblog/
    astroblogportfolio/
    beautysalon/
    gamestore/
    luxury-car/
    multilang-portfolio/
    next-portfolio/
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

### Dev server PHP

```bash
php -S localhost:8000
```

---

## Tech Stack

<p align="left">
 <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/astro/astro-original.svg" width="40" height="40" alt="Astro" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" width="40" height="40" alt="React" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" width="40" height="40" alt="Next" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" width="40" height="40" alt="Vue" />
 <!-- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nuxt/nuxt-original.svg" width="40" height="40" alt="Nuxt" /> -->
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" height="40" alt="JavaScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" width="40" height="40" alt="TypeScript" />
  <!-- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" alt="Laravel" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40" height="40" alt="PHP" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" width="40" height="40" alt="Sqlite" /> 
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" width="40" height="40" alt="Python" /> -->
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vite/vite-original.svg" width="40" height="40" alt="Vite" />
 <!-- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" width="40" height="40" alt="Composer" /> -->
</p>

## Projects

|            |        Projects         |      Stack       |          Discription           | Demo |              Folder               |
| :--------: | :---------------------: | :--------------: | :----------------------------: | :--: | :-------------------------------: |
| **Mobile** |                         |                  |                                |      |                                   |
|     1      |     **carrent-app**     | React Native, TS |          Car Rent App          |      |   [Link](/mobile/carrent-app/)    |
|  **Web**   |                         |                  |                                |      |                                   |
|     2      |      **astroblog**      |      Astro       |           Astro Blog           |      |      [Link](/web/astroblog/)      |
|     3      | **astroblogportfolio**  |      Astro       |      Astro Blog Portfolio      |      | [Link](/web/astroblogportfolio/)  |
|     4      |     **beautysalon**     |       Vue        |      Beauty Salon Vue App      |      |     [Link](/web/beautysalon/)     |
|     5      |      **gamestore**      | Next, React, TS  |      Next Game Store App       |      |      [Link](/web/gamestore/)      |
|     6      |     **luxury-car**      |      React       | React landing for detaling car |      |     [Link](/web/luxury-car/)      |
|     7      | **multilang-portfolio** | Astro, React, TS |   Astro multi-lang portfolio   |      | [Link](/web/multilang-portfolio/) |
|     8      |   **next-portfolio**    | React, Next, TS  |         Next portfolio         |      |   [Link](/web/next-portfolio/)    |
