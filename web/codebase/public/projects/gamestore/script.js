// Switch Theme
document.querySelector(".member-btn").addEventListener("click", () => {
  alert("Member Area Clicked");
});

// Accordion

document.querySelectorAll(".accordion-header").forEach((button) => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;

    button.classList.toggle("active");
    content.classList.toggle("open");
  });
});

// Success Form

document
  .querySelector(".contact-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    document.querySelector(".contact__success").style.display = "block";
  });

// FAQ

document.querySelectorAll(".faq-question").forEach((btn) => {
  btn.addEventListener("click", () => {
    const item = btn.parentElement;
    item.classList.toggle("active");
  });
});
