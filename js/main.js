const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const menu = document.querySelector(".mobile-menu");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

const openMenu = (event) => {
  // функция открывания меню
  menu.classList.add("is_open");
  document.body.style.overflow = "hidden"; // убирает прокрутку сайта под меню
  lightModeOn();
  mMenuToggle.classList.add("close-menu");
};
const closeMenu = (event) => {
  // функция закрытвает меню
  menu.classList.remove("is_open"); // убирает класс is-open
  document.body.style.overflow = ""; // возвращает прокрутку сайта под меню
  lightModeOff(); // перекрашивание меню
  mMenuToggle.classList.remove("close-menu"); // убирает класс для стилизации кнопки закрытия меню
};
// изменение цвета navbar при скролле
window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});
// открытие и закрытие мобильного меню
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is_open") ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
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

const swiper = new Swiper(".features-slider", {
  // инициализация слайдера
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
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
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    992: {
      slidesPerView: 2,
    },
  },
});

let currentModal;
let modalDialog;
let alertModal = document.querySelector("#alert-modal");

const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");
    modalDialog = currentModal.querySelector(".modal-dialog");
    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

var element = document.getElementById("user-phone");
var maskOptions = {
  mask: "+7(000)000-00-00",
  lazy: true,
};
var mask = new IMask(element, maskOptions);

var element = document.getElementById("modal-user-phone");
var maskOptions = {
  mask: "+7(000)000-00-00",
  lazy: true,
};
var mask = new IMask(element, maskOptions);
