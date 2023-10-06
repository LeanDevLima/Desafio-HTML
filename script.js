const passwordField = document.querySelector('.password-field');
const passwordInput = document.querySelector('#senha');
const togglePasswordButton = document.querySelector('#togglePassword');

togglePasswordButton.addEventListener('click', function () {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
    togglePasswordButton.textContent = passwordInput.type === 'password' ? '👁' : '👁‍🗨';
});
