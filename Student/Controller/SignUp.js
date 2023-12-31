function clearErrors() {

    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";
    }
}
function seterror(id, error) {

    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm() {
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var name = document.forms['myForm']["fname"].value;
    if (name.length < 5) {
        seterror("name", "*Length of name is too short");
        returnval = false;
    }

    if (name.length == 0) {
        seterror("name", "*Fill up the name");
        returnval = false;
    }

    var email = document.forms['myForm']["femail"].value;
    if (email.length > 30) {
        seterror("email", "*Email length is too long");
        returnval = false;
    }
    if (email.length == 0) {
        seterror("email", "*Fill up the email");
        returnval = false;
    }

    var phone = document.forms['myForm']["fphone"].value;
    if (phone.length != 11) {
        seterror("phone", "*Phone number should be of 11 digits!");
        returnval = false;
    }
    if (phone.length == 0) {
        seterror("phone", "*Give the phone number");
        returnval = false;
    }

    var password = document.forms['myForm']["fpass"].value;
    var passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/;

    if (password.length == 0) {
        seterror("pass", "*Fill up the password");
        returnval = false;
    }
    else if (password.length < 6) {
        seterror("pass", "*Password should be at least 6 characters long");
        returnval = false;
    }
    else if (!passwordRegex.test(password)) {
        seterror("pass", "*Password should contain at least one letter, one number,<br> one special character, and one uppercase letter.");
        returnval = false;
    }

    var cpassword = document.forms['myForm']["fcpass"].value;
    if (cpassword != password) {
        seterror("cpass", "*Password and Confirm password should match!");
        returnval = false;
    }
    if (cpassword.length == 0) {
        seterror("cpass", "*Fill up the confirm password");
        returnval = false;
    }

    return returnval;
}

