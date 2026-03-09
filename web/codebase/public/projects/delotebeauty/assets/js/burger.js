document.addEventListener("DOMContentLoaded", () => {
  const openBtn = document.getElementById("openMenu");
  const closeBtn = document.getElementById("closeMenu");
  const leftMenu = document.querySelector(".menu-left");
  const rightMenu = document.querySelector(".menu-right");
  const overlay = document.getElementById("overlay");

  function openMenu() {
    leftMenu.classList.add("active");
    rightMenu.classList.add("active");
    overlay.classList.add("active");
    openBtn.style.display = "none";
    closeBtn.style.display = "flex";
  }

  function closeMenuFunc() {
    leftMenu.classList.remove("active");
    rightMenu.classList.remove("active");
    overlay.classList.remove("active");
    openBtn.style.display = "flex";
    closeBtn.style.display = "none";
  }

  openBtn.addEventListener("click", openMenu);
  closeBtn.addEventListener("click", closeMenuFunc);
  overlay.addEventListener("click", closeMenuFunc);
});
