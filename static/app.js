document.addEventListener("DOMContentLoaded", function () {
  const mobileMenu = document.getElementById("mobile-menu");
  const navLinks = document.getElementById("nav-links");

  mobileMenu.addEventListener("click", function () {
    navLinks.classList.toggle("active");
  });
});
