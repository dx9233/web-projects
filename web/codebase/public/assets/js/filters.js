 // Get all buttons
    const filterButtons = document.querySelectorAll(".filter-btn");
    const projectCards = document.querySelectorAll(".project-card");

    filterButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        // remove active from all
        filterButtons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");

        const filter = btn.dataset.filter;

        projectCards.forEach((card) => {
          // Show all
          if (filter === "all") {
            card.classList.remove("hide");
          } else {
            // Show only selected
            card.dataset.category === filter
              ? card.classList.remove("hide")
              : card.classList.add("hide");
          }
        });
      });
    });