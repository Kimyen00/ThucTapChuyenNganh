document.addEventListener("DOMContentLoaded", () => {
  const images = document.querySelectorAll("img");

  const modalImage = document.getElementById("modalImage");
  const modal = new bootstrap.Modal(document.getElementById("imagePreviewModal"));

  images.forEach(img => {
    img.style.cursor = "zoom-in";
    img.addEventListener("click", () => {
      modalImage.src = img.src;
      modal.show();
    });
  });
});
