// src/types/global.d.ts

// For CSS Files
declare module "*.css" {
  const content: { [className: string]: string };
  export default content;
}

// For CSS modules
declare module "*.module.css" {
  const classes: { readonly [key: string]: string };
  export default classes;
}

// For SCSS/SASS
declare module "*.scss" {
  const classes: { readonly [key: string]: string };
  export default classes;
}

declare module "*.sass" {
  const classes: { readonly [key: string]: string };
  export default classes;
}
