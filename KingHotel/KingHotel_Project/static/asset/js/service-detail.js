document.addEventListener('DOMContentLoaded', function () {
  const elements = document.querySelectorAll('h2, p, .btn, i');

  elements.forEach(el => {
    el.classList.add('fade-up');
  });

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.3 });

  elements.forEach(el => observer.observe(el));
});
