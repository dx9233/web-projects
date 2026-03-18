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
    gameportal/
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

### Installing all dependencies

```bash
pnpm install
```

### Building all projects

```bash
pnpm run build
```

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
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" height="40" alt="JavaScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" width="40" height="40" alt="TypeScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" width="40" height="40" alt="Laravel" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40" height="40" alt="PHP" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" width="40" height="40" alt="Sqlite" /> 
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" width="40" height="40" alt="Python" /> 
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vite/vite-original.svg" width="40" height="40" alt="Vite" />
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" width="40" height="40" alt="Composer" /> 
</p>

## Projects

|            |        Projects         |      Stack       |          Discription           |                         Demo                          |              Folder               |
| :--------: | :---------------------: | :--------------: | :----------------------------: | :---------------------------------------------------: | :-------------------------------: |
| **Mobile** |                         |                  |                                |                                                       |                                   |
|     1      |     **carrent-app**     | React Native, TS |          Car Rent App          |                                                       |   [Link](/mobile/carrent-app/)    |
|  **Web**   |                         |                  |                                |                                                       |                                   |
|     2      |      **astroblog**      |      Astro       |           Astro Blog           |   [Demo](https://celadon-chaja-47fe91.netlify.app/)   |      [Link](/web/astroblog/)      |
|     3      | **astroblogportfolio**  |      Astro       |      Astro Blog Portfolio      |  [Demo](https://frabjous-mousse-414e9c.netlify.app/)  | [Link](/web/astroblogportfolio/)  |
|     4      |     **beautysalon**     |       Vue        |      Beauty Salon Vue App      |  [Demo](https://jolly-bublanina-fe63c0.netlify.app/)  |     [Link](/web/beautysalon/)     |
|     5      |     **gameportal**      |    React, TS     |     React Game Portal App      | [Demo](https://ephemeral-daifuku-c64f71.netlify.app/) |     [Link](/web/gameportal/)      |
|     6      |      **gamestore**      | Next, React, TS  |      Next Game Store App       | [Demo](https://endearing-tarsier-8ccafc.netlify.app/) |      [Link](/web/gamestore/)      |
|     7      |     **luxury-car**      |      React       | React landing for detaling car | [Demo](https://tangerine-paletas-eaa001.netlify.app/) |     [Link](/web/luxury-car/)      |
|     8      | **multilang-portfolio** | Astro, React, TS |   Astro multi-lang portfolio   |   [Demo](https://golden-cactus-9f9351.netlify.app/)   | [Link](/web/multilang-portfolio/) |
|     9      |   **next-portfolio**    | React, Next, TS  |         Next portfolio         |                       [Demo]()                        |   [Link](/web/next-portfolio/)    |
