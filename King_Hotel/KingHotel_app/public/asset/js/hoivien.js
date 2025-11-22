document.addEventListener('DOMContentLoaded', function () {
    // 1. Lấy Form dựa trên ID đã đặt trong HTML trước đó
    const form = document.getElementById('registerForm'); 
    const alertContainer = document.getElementById('alertContainer'); // Nơi hiển thị thông báo chung

    if (!form) return; // Đảm bảo form tồn tại

    // Hàm hiển thị thông báo Alert Bootstrap
    function createAlert(message, type = 'danger') {
        const alertHtml = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        alertContainer.innerHTML = alertHtml;
    }

    // Hàm xóa tất cả thông báo lỗi và trạng thái không hợp lệ
    function clearValidationStatus() {
        alertContainer.innerHTML = '';
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        document.querySelectorAll('.invalid-feedback').forEach(el => el.remove());
    }

    // Hàm thêm thông báo lỗi ngay dưới trường input
    function showValidationError(inputElement, message) {
        // Tạo div thông báo lỗi mới
        const feedback = document.createElement('div');
        feedback.classList.add('invalid-feedback');
        feedback.textContent = message;

        // Thêm trạng thái lỗi và chèn thông báo lỗi vào DOM
        inputElement.classList.add('is-invalid');
        inputElement.parentNode.appendChild(feedback);
    }
    
    // Xử lý sự kiện khi form được gửi
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        clearValidationStatus(); // Xóa trạng thái lỗi trước khi kiểm tra lại
        let isValid = true;

        // Danh sách input cần kiểm tra và ID/Tên đã được điều chỉnh
        const inputsToCheck = [
            { id: 'fullname', message: 'Vui lòng nhập họ và tên.' },
            { id: 'phone', message: 'Vui lòng nhập số điện thoại.' },
            { id: 'email', message: 'Vui lòng nhập địa chỉ email.' },
            { id: 'username', message: 'Vui lòng nhập tên đăng nhập.' },
            { id: 'password', message: 'Vui lòng nhập mật khẩu.' },
            { id: 'confirm_password', message: 'Vui lòng xác nhận mật khẩu.' }
        ];

        // 2. Kiểm tra các trường BẮT BUỘC (Required)
        inputsToCheck.forEach(({ id, message }) => {
            const input = document.getElementById(id);
            if (!input || !input.value.trim()) {
                if (input) {
                    showValidationError(input, message);
                }
                isValid = false;
            }
        });

        // 3. Kiểm tra Giới tính (Radio button)
        const genderMale = document.getElementById('male');
        const genderFemale = document.getElementById('female');
        const genderName = 'gender';
        
        // Kiểm tra xem ít nhất một nút radio có được chọn không
        if (!(genderMale.checked || genderFemale.checked)) {
             // Giả định radio buttons nằm trong một div cha chung, 
             // chúng ta sẽ đánh dấu nút đầu tiên là lỗi.
            genderMale.classList.add('is-invalid'); 
            const parentDiv = genderMale.closest('div.mb-3');
            if (parentDiv && !parentDiv.querySelector('.invalid-feedback')) {
                 showValidationError(genderMale, 'Vui lòng chọn giới tính.');
            }
            isValid = false;
        }

        // 4. Kiểm tra Định dạng Email
        const email = document.getElementById('email');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email && email.value && !emailPattern.test(email.value)) {
            showValidationError(email, 'Email không đúng định dạng.');
            isValid = false;
        }

        // 5. Kiểm tra Mật khẩu và Xác nhận mật khẩu khớp nhau
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm_password'); // Đã đổi ID thành confirm_password

        if (password && confirmPassword && password.value && confirmPassword.value && password.value !== confirmPassword.value) {
            showValidationError(confirmPassword, 'Mật khẩu xác nhận không khớp.');
            isValid = false;
        } else if (password && password.value.length < 8) { // Ví dụ kiểm tra độ dài tối thiểu
             showValidationError(password, 'Mật khẩu phải có ít nhất 8 ký tự.');
             isValid = false;
        }

        // 6. Gửi dữ liệu hoặc thông báo thành công (Client-side only)
        if (isValid) {
            // Trong ứng dụng thực tế: Thực hiện cuộc gọi AJAX đến Server Laravel tại đây.
            // Ví dụ: callAjaxForRegistration(formData); 
            
            // Dành cho mục đích kiểm tra cục bộ:
            createAlert('Đăng ký hợp lệ!', 'success');
            // form.reset(); // Không nên reset nếu bạn định gửi AJAX
        } else {
            createAlert('Vui lòng kiểm tra lại.', 'danger');
        }
    });
});