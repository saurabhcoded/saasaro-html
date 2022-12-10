// configure tooltip
const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

function toggleSidebar() {
  document.getElementById("body").classList.toggle("sided");
}

function checkScroll() {
  const navbar = document.querySelector(".navbar-spc");
  if (scrollY >= 60) {
    navbar.classList.add("bg-white");
    navbar.classList.remove("background-primary");
  } else {
    navbar.classList.remove("bg-white");
    navbar.classList.add("background-primary");
  }
}
window.addEventListener("scroll", checkScroll);
