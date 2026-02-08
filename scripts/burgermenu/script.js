const openBtn = document.getElementById("openMenu");
const closeBtn = document.getElementById("closeMenu");
const menu = document.getElementById("menu");
const overlay = document.getElementById("overlay");

// Open Menu
openBtn.addEventListener("click", () => {
  menu.classList.add("active");
  overlay.classList.add("active");
});

// Close Menu
closeBtn.addEventListener("click", () => {
  menu.classList.remove("active");
  overlay.classList.remove("active");
});

// Close Menu (Overlay Click)
overlay.addEventListener("click", () => {
  menu.classList.remove("active");
  overlay.classList.remove("active");
});
