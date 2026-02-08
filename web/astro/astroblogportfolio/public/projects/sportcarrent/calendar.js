document.addEventListener("DOMContentLoaded", () => {
  const calendarGrid = document.querySelector(".calendar-grid");

  const daysInMonth = 30; // тест
  for (let i = 1; i <= daysInMonth; i++) {
    const day = document.createElement("div");
    day.textContent = i;
    day.addEventListener("click", () => {
      document
        .querySelectorAll(".calendar-grid div")
        .forEach((el) => el.classList.remove("active"));
      day.classList.add("active");
    });
    calendarGrid.appendChild(day);
  }
});
