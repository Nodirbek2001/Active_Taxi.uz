// Carusel News

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlides: true, // "centerSlide" emas, balki "centerSlides"
    // fade emas, bu imkoniyatni ulash uchun boshqa paket kerak
    grabCursor: true, // 'true' emas, balki JavaScript to'g'ri qiymati
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 100000, // har 2.5 sekunddan so'ng surish
        disableOnInteraction: false,
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });