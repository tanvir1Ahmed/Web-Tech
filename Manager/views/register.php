<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../controller/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <script src="../controller/js/validation.js" defer></script>
</head>
<body>

    <h2>User Registration Form</h2>
    <form action="../controller/process_register.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <table cellspacing="10" cellpadding="10" border="1" align="center">
            <tr>
                <td>First Name:</td>
                <td>
                    <input type="text" id="first_name" name="first_name">
                    <div id="first_nameError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>
                    <input type="text" id="last_name" name="last_name">
                    <div id="last_nameError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td>
                    <input type="email" id="email" name="email">
                    <div id="emailError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" id="password" name="password">
                    <div id="passwordError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td>
                    <input type="date" id="dob" name="dob">
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <label><input type="radio" name="gender" value="Male"> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                    <label><input type="radio" name="gender" value="Other"> Other</label>
                    <div id="genderError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select id="country" name="country">
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Japan">Japan</option>
                        <option value="Korea">Korea</option>
                        <option value="China">China</option>
                        <option value="Italy">Italy</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td>
                    <input type="text" id="phone" name="phone">
                    <div id="phoneError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>NID (National Identification):</td>
                <td>
                    <input type="text" id="nid" name="nid">
                    <div id="nidError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>Education:</td>
                <td>
                    <select id="education" name="education">
                        <option value="JSC">JSC</option>
                        <option value="SSC">SSC</option>
                        <option value="HSC">HSC</option>
                        <option value="UNDERGRAD">UNDERGRAD</option>
                        <option value="MASTERS">MASTERS</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Profile Picture:</td>
                <td>
                    <input type="file" id="profile_picture" name="profile_picture">
                </td>
            </tr>
            <tr>
                <td>Terms and Conditions:</td>
                <td>
                    <label><input type="checkbox" id="terms" name="terms"> I agree to the Terms and Conditions</label>
                    <div id="termsError" class="error"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
        <div id="validationErrors" class="error"></div><br>
    </form>
    <script> document.addEventListener('DOMContentLoaded', function () {
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
 </script>

</body>
</html>
