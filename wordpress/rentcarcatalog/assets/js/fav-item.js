document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".favorite-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      btn.classList.toggle("active");
      let id = btn.dataset.id;

      let favorites = JSON.parse(localStorage.getItem("favorites") || "[]");
      if (favorites.includes(id)) {
        favorites = favorites.filter(item => item !== id);
      } else {
        favorites.push(id);
      }
      localStorage.setItem("favorites", JSON.stringify(favorites));
    });
  });
});
