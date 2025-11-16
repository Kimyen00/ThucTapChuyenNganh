document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');

    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // 1. Xóa tất cả các thông báo lỗi cũ
            document.querySelectorAll('.invalid-feedback').forEach(el => el.remove());
            document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));

            let isValid = true;

            const usernameInput = document.getElementById('tendn'); 
            const passwordInput = document.getElementById('password');

            // Hàm hiển thị lỗi
            const showError = (inputElement, message) => {
                inputElement.classList.add('is-invalid');
                const errorDiv = document.createElement('div');
                errorDiv.className = 'invalid-feedback';
                errorDiv.textContent = message;
                inputElement.parentNode.appendChild(errorDiv);
                // Đặt isValid = false nếu có lỗi được hiển thị
                isValid = false; 
            };

            const usernameValue = usernameInput ? usernameInput.value.trim() : '';
            const passwordValue = passwordInput ? passwordInput.value.trim() : '';

            // 2. Kiểm tra tính bắt buộc của Tên đăng nhập
            if (usernameInput && usernameValue === '') {
                showError(usernameInput, 'Vui lòng nhập tên đăng nhập.');
            }

            // 3. Kiểm tra tính bắt buộc của Mật khẩu
            if (passwordInput && passwordValue === '') {
                showError(passwordInput, 'Vui lòng nhập mật khẩu.');
            }
            
            // 4. Thực hiện hành động nếu hợp lệ
            if (isValid) {
                // Đây là nơi bạn sẽ gọi API hoặc gửi dữ liệu thực tế
                alert('Dữ liệu đăng nhập hợp lệ! (Chức năng đăng nhập sẽ hoạt động khi có backend)');
                // loginForm.submit(); // Bỏ comment khi có backend
                loginForm.reset();
            }
        });
    }
});