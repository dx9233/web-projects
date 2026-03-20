# Web Projects Monorepo

- [Project Structure](#project-structure)
- [Running and building locally](#running-and-building-locally)
- [Tech Stack](#tech-stack)
- [Projects](#projects)

---

## Project Structure

```
monorepo/
  packages/
    ui/
    utils/
  screenshoots/
  web/
    astroblog/
    astroblogportfolio/
    beautysalon/
    gameportal/
    luxury-car/
    multilang-portfolio/
    multilink-astro/
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
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/svelte/svelte-original.svg" width="40" height="40" alt="Svelte" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" height="40" alt="JavaScript" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" width="40" height="40" alt="TypeScript" /> 
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vite/vite-original.svg" width="40" height="40" alt="Vite" />
</p>

## Projects

|     |        Projects        |   Stack   |          Discription           |                         Demo                          |              Folder              |
| :-: | :--------------------: | :-------: | :----------------------------: | :---------------------------------------------------: | :------------------------------: |
|  1  |     **astroblog**      |   Astro   |           Astro Blog           |   [Demo](https://celadon-chaja-47fe91.netlify.app/)   |     [Link](/web/astroblog/)      |
|  2  | **astroblogportfolio** |   Astro   |      Astro Blog Portfolio      |  [Demo](https://frabjous-mousse-414e9c.netlify.app/)  | [Link](/web/astroblogportfolio/) |
|  3  |    **beautysalon**     |    Vue    |      Beauty Salon Vue App      |  [Demo](https://jolly-bublanina-fe63c0.netlify.app/)  |    [Link](/web/beautysalon/)     |
|  4  |     **gameportal**     | React, TS |     React Game Portal App      | [Demo](https://ephemeral-daifuku-c64f71.netlify.app/) |     [Link](/web/gameportal/)     |
|  5  |     **luxury-car**     |   React   | React landing for detaling car | [Demo](https://tangerine-paletas-eaa001.netlify.app/) |     [Link](/web/luxury-car/)     |
