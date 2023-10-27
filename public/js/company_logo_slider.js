const logoSlider = document.querySelector('.logo-slider');
const logoSlides = document.querySelectorAll('.logo-slide');
const slideWidth = logoSlides[0].clientWidth;
const slideCount = logoSlides.length;
let currentSlide = 0;
let direction = 1;

function slideLogos() {
    currentSlide += direction;
    
    if (currentSlide === slideCount - 1 || currentSlide === 0) {
        direction = -direction;
    }
    
    logoSlider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    setTimeout(slideLogos, 2000);
}

slideLogos();
