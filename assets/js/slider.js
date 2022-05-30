var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        watchSlidesProgress: true,

        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },

    slidesPerView: 1,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },
    breakpoints: {
      769: {
        slidesPerView: 4,
        slidesPerGroup: 2,
      },
    },
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    /*navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },*/
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    thumbs: {
      swiper: swiper,
    },
  });