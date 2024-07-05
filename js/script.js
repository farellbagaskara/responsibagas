// toggle class active untuk menu
const navbarNav = document.querySelector(".navbar-nav");
// ketika hambuger menu di klik
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};