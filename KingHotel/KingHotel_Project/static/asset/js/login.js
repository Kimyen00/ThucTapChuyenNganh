document.getElementById('loginForm').addEventListener('submit', function (e) {
  e.preventDefault();
  document.querySelectorAll('.invalid-feedback').forEach(el => el.remove());
  document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));

  let isValid = true;

  const emailInput = document.getElementById('email');
  const passwordInput = document.getElementById('password');

  const emailValue = emailInput.value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailValue === '' || !emailRegex.test(emailValue)) {
    showError(emailInput, emailValue === '' ? 'Vui lòng nhập email.' : 'Email không hợp lệ.');
    isValid = false;
  }

  const passwordValue = passwordInput.value.trim();
  if (passwordValue === '') {
    showError(passwordInput, 'Vui lòng nhập mật khẩu.');
    isValid = false;
  }

  if (isValid) {
    this.submit();
  }
});

function showError(inputElement, message) {
  inputElement.classList.add('is-invalid');

  const errorDiv = document.createElement('div');
  errorDiv.className = 'invalid-feedback';
  errorDiv.textContent = message;

  inputElement.parentNode.appendChild(errorDiv);
}
