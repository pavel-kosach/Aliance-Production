const navbar = document.querySelector (".navbar");
const logo = document.querySelector(".logo-svg use");
const menu = document.querySelector(".mobile-menu");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
window.addEventListener('scroll', () => {
  if (this.scrollY > 1){
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo";
  } else {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprites.svg#logo-light";
  }
})
mMenuToggle.addEventListener("click",(event) => {
  event.preventDefault();
  menu.classList.toggle("is_open");
})