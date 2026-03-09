const openBtn = document.getElementById("openMenu");
const closeBtn = document.getElementById("closeMenu");
const menu = document.getElementById("menu");
const overlay = document.getElementById("overlay");

openBtn.addEventListener("click", () => {
  menu.classList.add("active");
  overlay.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  menu.classList.remove("active");
  overlay.style.display = "none";
});

overlay.addEventListener("click", () => {
  menu.classList.remove("active");
  overlay.style.display = "none";
});
