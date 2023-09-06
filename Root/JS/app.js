document.addEventListener("DOMContentLoaded", () => {
  const navLinks = document.querySelectorAll(".nav-link");
  navLinks.forEach((link) => {
    if (document.title.toLowerCase() === link.textContent.toLowerCase()) {
      link.classList.add("active");
    }
  });
});
