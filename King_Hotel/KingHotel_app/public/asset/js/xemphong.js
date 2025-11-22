document.addEventListener('DOMContentLoaded', function () {
    const roomTypeSelect = document.getElementById('roomType');
    const totalPriceDisplay = document.getElementById('totalPrice');
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    const roomCards = document.querySelectorAll('.room-card');
    
    // Tạo và chèn display tên phòng đã chọn
    const selectedRoomDisplay = document.createElement('p');
    selectedRoomDisplay.className = 'text-primary fw-bold';
    selectedRoomDisplay.id = 'selectedRoomDisplay';
    const formElement = document.querySelector('.card.shadow.p-4 form');
    if (formElement) {
        formElement.insertAdjacentElement('afterbegin', selectedRoomDisplay);
    }

    let selectedRoomPrice = 0;
    let selectedRoomName = '';

    // --- Thiết lập ngày tối thiểu (min date) ---
    const today = new Date();
    // Ngày nhận phòng tối thiểu là ngày hôm sau
    const minCheckin = new Date(today);
    minCheckin.setDate(today.getDate() + 1);
    const minDateString = minCheckin.toISOString().split('T')[0];
    
    // Gán thuộc tính min cho input date
    checkinInput.setAttribute('min', minDateString);
    checkoutInput.setAttribute('min', minDateString);

    // Gán giá trị mặc định (tùy chọn)
    checkinInput.value = minDateString;
    
    const defaultCheckout = new Date(minCheckin);
    defaultCheckout.setDate(minCheckin.getDate() + 1);
    checkoutInput.value = defaultCheckout.toISOString().split('T')[0];
    // --- Kết thúc thiết lập ngày ---


    // --- Hàm tính tổng tiền (Dùng Math.floor để xử lý ngày hợp lệ) ---
    function updateTotalPrice() {
        const checkinDate = new Date(checkinInput.value);
        const checkoutDate = new Date(checkoutInput.value);

        // Đảm bảo chọn ngày hợp lệ: ngày trả phòng phải lớn hơn ngày nhận phòng
        if (checkoutDate > checkinDate && selectedRoomPrice > 0) {
            const diffTime = checkoutDate - checkinDate;
            const diffDays = Math.ceil(diffTime / (1000 * 3600 * 24));
            
            if (diffDays <= 0) {
                totalPriceDisplay.textContent = 'Ngày trả phòng phải sau ngày nhận phòng.';
                return;
            }

            const total = diffDays * selectedRoomPrice;
            totalPriceDisplay.textContent = `Tổng tiền (${diffDays} đêm): ${total.toLocaleString('vi-VN')}đ`;
        } else {
            totalPriceDisplay.textContent = 'Vui lòng chọn phòng và ngày hợp lệ.';
        }
    }

    // --- Logic lọc phòng theo loại (Standard, Deluxe, Suite) ---
    roomTypeSelect.addEventListener('change', function () {
        const selectedType = this.value;
        
        // Đặt lại phòng đã chọn khi lọc
        selectedRoomPrice = 0;
        selectedRoomName = '';
        selectedRoomDisplay.textContent = '';
        updateTotalPrice();
        
        roomCards.forEach(card => {
            const roomPrice = parseInt(card.getAttribute('data-price'));
            card.style.display = 'none';

            // Thiết lập điều kiện lọc (có thể cần điều chỉnh giá trị)
            if (selectedType === 'standard' && roomPrice < 1700000) { // Giả định Standard < 1.7tr
                card.style.display = 'block';
            } else if (selectedType === 'deluxe' && roomPrice >= 1700000 && roomPrice < 2500000) { // Giả định Deluxe 1.7tr - 2.5tr
                card.style.display = 'block';
            } else if (selectedType === 'suite' && roomPrice >= 2500000) { // Giả định Suite >= 2.5tr
                card.style.display = 'block';
            } else if (selectedType === 'Chọn phòng...') {
                 card.style.display = 'block'; // Hiển thị tất cả nếu chưa chọn loại
            }
        });
    });

    // --- Xử lý sự kiện chọn phòng ---
    document.querySelectorAll('.select-room').forEach(button => {
        button.addEventListener('click', function () {
            selectedRoomName = this.getAttribute('data-room');
            selectedRoomPrice = parseInt(this.getAttribute('data-price'));
            
            // Highlight phòng đã chọn (Optional)
            roomCards.forEach(card => card.classList.remove('border-primary'));
            this.closest('.room-card').classList.add('border-primary'); 
            
            // Cuộn lên form
            document.getElementById('bookingForm').scrollIntoView({
                behavior: 'smooth'
            });

            // Hiển thị tên phòng
            selectedRoomDisplay.textContent = `Phòng đã chọn: ${selectedRoomName}`;

            // Tự động chọn loại phòng trên dropdown
            let roomType;
            if (selectedRoomPrice < 1700000) {
                roomType = 'standard';
            } else if (selectedRoomPrice >= 1700000 && selectedRoomPrice < 2500000) {
                roomType = 'deluxe';
            } else {
                roomType = 'suite';
            }

            roomTypeSelect.value = roomType;
            updateTotalPrice();
        });
    });

    // --- Sự kiện tính tổng tiền (khi ngày nhận/trả thay đổi) ---
    checkinInput.addEventListener('change', updateTotalPrice);
    checkoutInput.addEventListener('change', updateTotalPrice);

    // Kích hoạt bộ lọc mặc định khi trang tải (hiển thị tất cả phòng ban đầu)
    if (roomTypeSelect.value === 'Chọn phòng...') {
        roomTypeSelect.dispatchEvent(new Event('change'));
    }
});