

document.addEventListener('DOMContentLoaded', function () {
  const roomTypeSelect = document.getElementById('roomType');
  const totalPriceDisplay = document.getElementById('totalPrice');
  const checkinInput = document.getElementById('checkin');
  const checkoutInput = document.getElementById('checkout');
  const roomCards = document.querySelectorAll('.room-card');
  const selectedRoomDisplay = document.createElement('p');
  selectedRoomDisplay.className = 'text-primary fw-bold';
  selectedRoomDisplay.id = 'selectedRoomDisplay';
  document.querySelector('.card.shadow.p-4 form').insertAdjacentElement('afterbegin', selectedRoomDisplay);

  let selectedRoomPrice = 0;
  let selectedRoomName = '';

  // Thiết lập ngày hiện tại
  const today = new Date().toISOString().split('T')[0];
  checkinInput.value = today;

  const tomorrow = new Date();
  tomorrow.setDate(tomorrow.getDate() + 1); // Cộng thêm 1 ngày

  const tomorrowString = tomorrow.toISOString().split('T')[0];
  checkoutInput.value = tomorrowString;

  roomTypeSelect.addEventListener('change', function () {
    const selectedType = this.value;

    roomCards.forEach(card => {
      const roomPrice = parseInt(card.getAttribute('data-price'));
      card.style.display = 'none';

      if (selectedType === 'standard' && roomPrice < 1200000) {
        card.style.display = 'block';
      } else if (selectedType === 'deluxe' && roomPrice >= 1200000 && roomPrice < 2000000) {
        card.style.display = 'block';
      } else if (selectedType === 'suite' && roomPrice >= 2000000) {
        card.style.display = 'block';
      }
    });
  });

  document.querySelectorAll('.select-room').forEach(button => {
    button.addEventListener('click', function () {
      selectedRoomName = this.getAttribute('data-room');
      selectedRoomPrice = parseInt(this.getAttribute('data-price'));
      document.getElementById('bookingForm').scrollIntoView({
        behavior: 'smooth'
      });

      // Hiển thị tên phòng
      selectedRoomDisplay.textContent = `Phòng đã chọn: ${selectedRoomName}`;

      // Xác định loại phòng
      let roomType;
      if (selectedRoomPrice < 1200000) {
        roomType = 'standard';
      } else if (selectedRoomPrice >= 1200000 && selectedRoomPrice < 2000000) {
        roomType = 'deluxe';
      } else {
        roomType = 'suite';
      }

      roomTypeSelect.value = roomType;
      updateTotalPrice();
    });
  });

  // Tính tổng tiền
  checkoutInput.addEventListener('change', updateTotalPrice);

  function updateTotalPrice() {
    const checkinDate = new Date(checkinInput.value);
    const checkoutDate = new Date(checkoutInput.value);

    if (checkoutDate > checkinDate && selectedRoomPrice > 0) {
      const diffTime = checkoutDate - checkinDate;
      const diffDays = Math.ceil(diffTime / (1000 * 3600 * 24));
      const total = diffDays * selectedRoomPrice;
      totalPriceDisplay.textContent = `Tổng tiền: ${total.toLocaleString()}đ`;
    } else {
      totalPriceDisplay.textContent = 'Vui lòng chọn ngày nhận/trả hợp lệ.';
    }
  }
});
