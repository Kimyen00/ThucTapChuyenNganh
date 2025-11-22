document.addEventListener('DOMContentLoaded', function () {
    // --- Khai báo biến và Lấy Element ---
    const loginForm = document.getElementById('loginForm');
    const tendnInput = document.getElementById('tendn');
    const passwordInput = document.getElementById('password');
    const alertContainer = document.getElementById('alertContainer');

    // Lấy CSRF Token
    const csrfElement = document.querySelector('meta[name="csrf-token"]');
    const csrfToken = csrfElement ? csrfElement.getAttribute('content') : '';
    
    if (!loginForm) return; 

    // --- Hàm Hỗ trợ ---

    function createAlert(message, type = 'danger') {
        const html = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">${message}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
        alertContainer.innerHTML = html;
    }

    function showError(inputElement, message) {
        inputElement.classList.add('is-invalid');
        // Thêm thông báo lỗi nếu chưa có
        if (!inputElement.parentNode.querySelector('.invalid-feedback')) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback';
            errorDiv.textContent = message;
            inputElement.parentNode.appendChild(errorDiv);
        }
    }
    
    function clearValidationStatus() {
        alertContainer.innerHTML = '';
        document.querySelectorAll('.invalid-feedback').forEach(el => el.remove());
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    }

    // --- Xử lý sự kiện Submit chính ---

    loginForm.addEventListener('submit', async function (e) {
        e.preventDefault();
        clearValidationStatus();
        let isValid = true;

        const tendnValue = tendnInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        // 1. Xác thực cục bộ
        if (tendnValue === '') {
            showError(tendnInput, 'Vui lòng nhập tên đăng nhập hoặc email.');
            isValid = false;
        }
        if (passwordValue === '') {
            showError(passwordInput, 'Vui lòng nhập mật khẩu.');
            isValid = false;
        }

       
            
          
    });
});