document.addEventListener('DOMContentLoaded', function () {
  const viewDetailButtons = document.querySelectorAll('.view-detail');
  const modalContent = document.getElementById('modalContent');

  const serviceDetails = {
    "Spa & Massage": "Dịch vụ spa cao cấp, mang đến sự thư giãn tuyệt đối với các liệu trình chuẩn quốc tế.",
    "Ẩm Thực 5 Sao": "Thưởng thức ẩm thực đa dạng từ Âu sang Á, tinh tế và đẳng cấp.",
    "Hồ Bơi Vô Cực": "Hồ bơi tầng thượng, view thành phố tuyệt đẹp, lý tưởng để check-in.",
    "Gym & Yoga": "Phòng gym hiện đại, lớp yoga giúp bạn cân bằng sức khỏe thể chất lẫn tinh thần.",
    "Đưa Đón Sân Bay": "Xe đưa đón sân bay nhanh chóng, an toàn, phục vụ 24/7.",
    "Tour Nội Thành": "Hành trình khám phá các địa điểm nổi tiếng trong thành phố với hướng dẫn viên chuyên nghiệp."
  };

  viewDetailButtons.forEach(button => {
    button.addEventListener('click', function () {
      const service = this.getAttribute('data-service');
      modalContent.textContent = serviceDetails[service] || "Thông tin dịch vụ đang cập nhật...";
      new bootstrap.Modal(document.getElementById('serviceModal')).show();
    });
  });
});
