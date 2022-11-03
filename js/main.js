const navbar = document.querySelector (".navbar");
const logo = document.querySelector(".logo-svg use");
const menu = document.querySelector(".mobile-menu");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const lightModeOn = (event) => {
  navbar.classList.add("navbar-light"); // перекрашивание меню
  logo.href.baseVal = "img/sprites.svg#logo"; // перекрашивание меню
};
const lightModeOff= (event) => {
  navbar.classList.remove("navbar-light"); // перекрашивание меню
  logo.href.baseVal = "img/sprites.svg#logo-light"; // перекрашивание меню
};
const openMenu = (event) => { // функция открывания меню
  menu.classList.add("is_open"); // добавляет класс is-open
  document.body.style.overflow="hidden"; // убирает прокрутку сайта под меню
  lightModeOn(); // перекрашивание меню
  mMenuToggle.classList.add("close-menu"); // добавляет класс для стилизации кнопки закрытия меню
};
const closeMenu = (event) => { // функция закрытвает меню
  menu.classList.remove("is_open"); // убирает класс is-open
  document.body.style.overflow=""; // возвращает прокрутку сайта под меню
  lightModeOff(); // перекрашивание меню
  mMenuToggle.classList.remove("close-menu"); // убирает класс для стилизации кнопки закрытия меню
};
// изменение цвета navbar при скролле
window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff(); // перекрашивание мен
});
// открытие и закрытие мобильного меню
mMenuToggle.addEventListener("click",(event) => {
  event.preventDefault();
  menu.classList.contains('is_open') ? closeMenu() : openMenu();
});