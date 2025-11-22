
// Khi DOM đã load hết
document.addEventListener('DOMContentLoaded', function () {

  const achievements = document.querySelectorAll('.achievement');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2
  });

  achievements.forEach(item => {
    observer.observe(item);
  });

});


// Animation cho phần Giới thiệu
document.addEventListener('DOMContentLoaded', function () {

  const elements = document.querySelectorAll('.animate-left, .animate-right');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-show');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.3
  });

  elements.forEach(el => observer.observe(el));
});
