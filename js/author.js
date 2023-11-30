const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: 3,
  centeredSlides: true,
  slideToClickedSlide: true,
  spaceBetween: 124,
  touchRatio: 0,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 500,
  effect: "coverflow",
  coverflowEffect: {
    rotate: 5,
    slideShadows: 0,
  },
});

swiper.on("slideChange", function () {
  updateButtonLink();
});
  
const buttonLink = document.getElementById("buttonLink");
buttonLink.setAttribute("href", "book.html");
  
function updateButtonLink() {
  // Получеам активный слайд
  const activeSlide = document.querySelector(".swiper-slide-active");

  // Получаем ссылку из атрибута data-link слайда
  const slideLink = activeSlide.getAttribute("data-link");

  // Установливаем новую ссылку для кнопки
  const buttonLink = document.getElementById("buttonLink");
  buttonLink.setAttribute("href", slideLink);
}

const btn1 = document.getElementById('bio');
const biography = document.getElementById('biography');

function scrollToSection() {
  if (biography.style.display === 'none') {
    biography.style.display = 'block'; 
    biography.scrollIntoView({ behavior: 'smooth' });
  } else {
    biography.style.display = 'none';
  }
}


