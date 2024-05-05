const swiperSlider = new Swiper(".slider-container", {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".slider-pagination",
    clickable: true,
  },
});

const swiperBestSeller = new Swiper(".justin-slider", {
  direction: "horizontal",
  slidesPerView: 2,
  spaceBetween: 10,
  speed: 800,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    992: {
      autoplay: false,
      slidesPerView: 4,
      spaceBetween: 26,
    },
  },
  navigation: {
    nextEl: ".justin-next",
    prevEl: ".justin-prev",
  },
});


const swiperInstagram = new Swiper(".instagram-slider", {
  direction: "horizontal",
  speed: 800,
  spaceBetween: 10,
  slidesPerView: 2,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    480: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    992: {
      autoplay: false,
      slidesPerView: 4,
      spaceBetween: 27,
    },
  },
  navigation: {
    nextEl: ".instagram-next",
    prevEl: ".instagram-prev",
  },
});

const swiperTestimonials = new Swiper(".testimonials-slider", {
  direction: "horizontal",
  slidesPerView: 1.5,
  spaceBetween: 25,
  speed: 800,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 25,
    },
    992: {
      autoplay: false,
      slidesPerView: 4,
      spaceBetween: 26,
    },
  },
});
