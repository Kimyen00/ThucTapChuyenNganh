document.addEventListener("DOMContentLoaded", () => {
  const zoomableImages = document.querySelectorAll(".data-zoom-img");

  const modalImage = document.getElementById("modalImage");
  const modal = new bootstrap.Modal(document.getElementById("imagePreviewModal"));

  zoomableImages.forEach(img => {
    img.style.cursor = "zoom-in";
    img.addEventListener("click", () => {
      modalImage.src = img.src;
      modal.show();
    });
  });
})