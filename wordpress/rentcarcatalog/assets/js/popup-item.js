document.querySelectorAll(".rent-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    document.getElementById("car_id").value = btn.dataset.id;
    document.getElementById("rentModal").classList.remove("hidden");
  });
});

document.querySelector(".modal-close").addEventListener("click", () => {
  document.getElementById("rentModal").classList.add("hidden");
});
