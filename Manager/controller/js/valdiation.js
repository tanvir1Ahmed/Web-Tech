document.addEventListener('DOMContentLoaded', function () {
    function validateForm() {
        var firstName = document.getElementById('first_name').value.trim();
        var lastName = document.getElementById('last_name').value.trim();
        var email = document.getElementById('email').value.trim();
        var password = document.getElementById('password').value.trim();
        var gender = document.querySelector('input[name="gender"]:checked');
        var phone = document.getElementById('phone').value.trim();
        var nid = document.getElementById('nid').value.trim();
        var termsCheckbox = document.getElementById('terms');

        // Clear previous error messages
        clearErrors();

        // Validate first name
        if (firstName.length < 2) {
            displayError('first_name', 'First Name should be at least 2 letters');
            return false;
        }

        // Validate last name
        if (lastName.length < 2) {
            displayError('last_name', 'Last Name should be at least 2 letters');
            return false;
        }

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            displayError('email', 'Invalid Email Format');
            return false;
        }

        // Validate password length
        if (password.length < 6) {
            displayError('password', 'Password should be at least 6 letters');
            return false;
        }

        // Validate gender selection
        if (!gender) {
            displayError('gender', 'Please select a gender');
            return false;
        }

        // Validate phone number format
        var phoneRegex = /^\d+$/;
        if (!phoneRegex.test(phone) || phone.length !== 11) {
            displayError('phone', 'Phone Number should contain 11 numeral digits');
            return false;
        }

        // Validate NID format
        var nidRegex = /^\d{10}$/;
        if (!nidRegex.test(nid)) {
            displayError('nid', 'NID should be 10 numeral digits');
            return false;
        }

        // Validate terms and conditions
        if (!termsCheckbox.checked) {
            displayError('terms', 'Please agree to the Terms and Conditions');
            return false;
        }

        return true;
    }

    function displayError(fieldId, message) {
        var errorElement = document.getElementById(fieldId + 'Error');
        errorElement.innerText = message;
    }

    function clearErrors() {
        var fieldErrors = document.getElementsByClassName('error');
        for (var i = 0; i < fieldErrors.length; i++) {
            fieldErrors[i].innerText = '';
        }
    }

    document.querySelector('form').onsubmit = validateForm;
});
