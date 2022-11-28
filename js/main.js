const navbar = document.querySelector (".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const menu = document.querySelector(".mobile-menu");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");

const lightModeOn = (event) => { // перекрашивание меню
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
};
const lightModeOff= (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
  logoLight.style.display = "block";
};

const openMenu = (event) => { // функция открывания меню
  menu.classList.add("is_open"); 
  document.body.style.overflow="hidden"; // убирает прокрутку сайта под меню
  lightModeOn();
  mMenuToggle.classList.add("close-menu");
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


const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.steps-button-next',
    prevEl: '.steps-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
    },
  },
});

const swiper = new Swiper(".features-slider", { // инициализация слайдера
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    }
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
});


const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");
document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    !event.composedPath().includes(modalDialog) && modal.classList.contains("is-open")
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  } 
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});