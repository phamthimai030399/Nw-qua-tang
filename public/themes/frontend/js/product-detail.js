const detailImg = new Swiper(".detail-page-img", {
  loop: true,
  spaceBetween: 8,
  slidesPerView: "auto",
  freeMode: true,
  watchSlidesProgress: true,
  speed: 800,
  breakpoints: {
    768: {
      direction: "vertical",
      slidesPerView: 5,
      spaceBetween: 20,
    },
    992: {
      direction: "vertical",
      slidesPerView: 6,
    },
  },
});
const detailThumb = new Swiper(".detail-page-thumb", {
  loop: true,
  spaceBetween: 10,
  speed: 800,
  navigation: {
    nextEl: ".detail-page-next",
    prevEl: ".detail-page-prev",
  },
  thumbs: {
    swiper: detailImg,
  },
});
