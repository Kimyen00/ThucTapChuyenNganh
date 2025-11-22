document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');

    if (contactForm) { // Kiểm tra xem form có tồn tại không
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault(); // Ngăn chặn hành vi submit mặc định của form

            let isValid = true;

            // Danh sách các trường input cần kiểm tra
            const fieldsToValidate = [
                {
                    id: 'name',
                    messageRequired: 'Vui lòng nhập họ và tên của bạn.',
                    errorElementId: 'error-name'
                },
                {
                    id: 'email',
                    messageRequired: 'Vui lòng nhập địa chỉ email.',
                    messageInvalid: 'Email không đúng định dạng.',
                    errorElementId: 'error-email'
                },
                {
                    id: 'message',
                    messageRequired: 'Vui lòng nhập nội dung tin nhắn.',
                    minLength: 20,
                    messageMinLength: 'Tin nhắn phải có ít nhất 20 ký tự.',
                    errorElementId: 'error-message'
                }
            ];

            fieldsToValidate.forEach(({ id, errorElementId }) => {
                const inputElement = document.getElementById(id);
                const errorElement = document.getElementById(errorElementId);

                if (inputElement) {
                    inputElement.classList.remove('is-invalid');
                }
                if (errorElement) {
                    errorElement.textContent = '';
                }
            });

            fieldsToValidate.forEach(({ id, messageRequired, errorElementId, minLength, messageMinLength }) => {
                const inputElement = document.getElementById(id);
                const errorElement = document.getElementById(errorElementId);
                const value = inputElement ? inputElement.value.trim() : '';

                if (inputElement) {
                    if (!value) {
                        inputElement.classList.add('is-invalid');
                        if (errorElement) {
                            errorElement.textContent = messageRequired;
                        }
                        isValid = false;
                    } else if (minLength && value.length < minLength) {
                        inputElement.classList.add('is-invalid');
                        if (errorElement && messageMinLength) {
                            errorElement.textContent = messageMinLength;
                        }
                        isValid = false;
                    }
                }
            });

            const emailInput = document.getElementById('email');
            const emailErrorElement = document.getElementById('error-email');
            const emailConfig = fieldsToValidate.find(field => field.id === 'email');

            if (emailInput && emailInput.value.trim() && !emailInput.classList.contains('is-invalid')) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailInput.value.trim())) {
                    emailInput.classList.add('is-invalid');
                    if (emailErrorElement && emailConfig && emailConfig.messageInvalid) {
                        emailErrorElement.textContent = emailConfig.messageInvalid;
                    }
                    isValid = false;
                }
            }

            // Nếu tất cả đều hợp lệ
            if (isValid) {
                alert('Tin nhắn của bạn đã được gửi thành công!');
                contactForm.reset();

                fieldsToValidate.forEach(({ id, errorElementId }) => {
                    const inputElement = document.getElementById(id);
                    const errorElement = document.getElementById(errorElementId);
                    if (inputElement) {
                        inputElement.classList.remove('is-invalid');
                    }
                    if (errorElement) {
                        errorElement.textContent = '';
                    }
                });
            }
        });
    } else {
        console.warn("Contact form with ID 'contactForm' not found.");
    }
});