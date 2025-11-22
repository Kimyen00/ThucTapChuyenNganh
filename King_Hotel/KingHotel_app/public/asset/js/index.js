// banner-carousel.js
document.addEventListener('DOMContentLoaded', function () {

   const backToTopBtn = document.getElementById("backToTop");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      backToTopBtn.classList.add("show");
      backToTopBtn.classList.remove("hide");
    } else {
      backToTopBtn.classList.remove("show");
      backToTopBtn.classList.add("hide");
    }
  });

  backToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
  const carousel = document.querySelector('#bannerCarousel');
  if (carousel) {
    new bootstrap.Carousel(carousel, {
      interval: 2500,
      ride: 'carousel',
      pause: false,
      wrap: true
    });
  }
  
});
