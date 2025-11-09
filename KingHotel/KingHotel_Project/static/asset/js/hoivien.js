
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        let isValid = true;

        // Danh sách input cần kiểm tra
        const inputs = [
            { id: 'firstName', message: 'Vui lòng nhập họ của bạn.' },
            { id: 'lastName', message: 'Vui lòng nhập tên của bạn.' },
            { id: 'username', message: 'Vui lòng chọn tên đăng nhập.' },
            { id: 'email', message: 'Vui lòng nhập địa chỉ email hợp lệ.' },
            { id: 'password', message: 'Vui lòng nhập mật khẩu.' },
            { id: 'confirmPassword', message: 'Vui lòng xác nhận mật khẩu.' }
        ];

        inputs.forEach(({ id }) => {
            const input = document.getElementById(id);
            input.classList.remove('is-invalid');
        });

        inputs.forEach(({ id, message }) => {
            const input = document.getElementById(id);
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
            }
        });

        const email = document.getElementById('email');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value && !emailPattern.test(email.value)) {
            email.classList.add('is-invalid');
            email.nextElementSibling.textContent = 'Email không đúng định dạng.';
            isValid = false;
        }

        // Kiểm tra mật khẩu và xác nhận mật khẩu khớp nhau
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        const confirmFeedback = document.getElementById('confirmPasswordFeedback');

        if (password.value && confirmPassword.value && password.value !== confirmPassword.value) {
            confirmPassword.classList.add('is-invalid');
            confirmFeedback.textContent = 'Mật khẩu xác nhận không khớp.';
            isValid = false;
        }

        // Kiểm tra checkbox điều khoản
        const agreeTerms = document.getElementById('agreeTerms');
        if (!agreeTerms.checked) {
            agreeTerms.classList.add('is-invalid');
            isValid = false;
        } else {
            agreeTerms.classList.remove('is-invalid');
        }

        if (isValid) {
            alert('Đăng ký thành công!');
            form.reset();
        }
    });
});

