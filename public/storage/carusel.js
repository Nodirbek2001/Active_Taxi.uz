const images = document.querySelectorAll(".carousel-image");
const dots = document.querySelectorAll(".dot");
const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");

const autoSlideInterval = 20000;

const nextSlide = () => {
  const currentSlide = document.querySelector(".current");
  currentSlide.classList.remove("current");

  if (currentSlide.nextElementSibling && currentSlide.nextElementSibling.classList.contains("carousel-image")) {
    currentSlide.nextElementSibling.classList.add("current");
  } else {
    images[0].classList.add("current");
  }

  dotsNextSlide();
};

const prevSlide = () => {
  const currentSlide = document.querySelector(".current");
  currentSlide.classList.remove("current");

  if (currentSlide.previousElementSibling && currentSlide.previousElementSibling.classList.contains("carousel-image")) {
    currentSlide.previousElementSibling.classList.add("current");
  } else {
    images[images.length - 1].classList.add("current");
  }

  dotsPrevSlide();
};
let autoSlider = setInterval(nextSlide, autoSlideInterval);
