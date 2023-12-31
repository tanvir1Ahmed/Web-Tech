function mOver(obj) {
    obj.style.backgroundColor = "#f7f7f763";
    obj.style.fontWeight = "bold";
}

function mOut(obj) {
    obj.style.background = "#5a502f94";
}
function bringToFront1(index) {
    var element = document.getElementById(index);
    element.style.zIndex = 100;
    var element1 = document.getElementById("box2");
    var element2 = document.getElementById("box3");
    var element3 = document.getElementById("box4");
    element1.style.zIndex = 0;
    element2.style.zIndex = 0;
    element3.style.zIndex = 0;
}
function bringToFront2(index) {
    var element = document.getElementById(index);
    element.style.zIndex = 100;
    var element1 = document.getElementById("box1");
    var element2 = document.getElementById("box3");
    var element3 = document.getElementById("box4");
    element1.style.zIndex = 0;
    element2.style.zIndex = 0;
    element3.style.zIndex = 0;
}
function bringToFront3(index) {
    var element = document.getElementById(index);
    element.style.zIndex = 100;
    var element1 = document.getElementById("box2");
    var element2 = document.getElementById("box1");
    var element3 = document.getElementById("box4");
    element1.style.zIndex = 0;
    element2.style.zIndex = 0;
    element3.style.zIndex = 0;
}
function bringToFront4(index) {
    var element = document.getElementById(index);
    element.style.zIndex = 100;
    var element1 = document.getElementById("box2");
    var element2 = document.getElementById("box3");
    var element3 = document.getElementById("box1");
    element1.style.zIndex = 0;
    element2.style.zIndex = 0;
    element3.style.zIndex = 0;
}

// Get references to the input and the image container
var imageInput = document.getElementById('imageUpload');
var imageContainer = document.getElementById('imageContainer');

// Add an event listener to the input file change event
imageInput.addEventListener('change', function () {
    // Get the selected file from the input
    var selectedFile = imageInput.files[0];

    // Check if a file was selected
    if (selectedFile) {
        // Create a FileReader to read the selected file
        var reader = new FileReader();

        // Define a callback function to handle the file reading
        reader.onload = function (e) {
            // Set the background image of the .im div to the loaded image
            imageContainer.style.backgroundImage = 'url(' + e.target.result + ')';
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(selectedFile);
    } else {
        // Clear the background image if no file is selected
        imageContainer.style.backgroundImage = 'none';
    }
});

function confirmEmail() {
    function confirmEmail() {
        var emailInput = document.getElementById('emailInput');
        var passwordResetFields = document.getElementById('passwordResetFields');

        // Get the email and password from the input fields
        var email = emailInput.value.trim();
        var password = 'Wmcbz#@*1'; // You may want to get this securely from the server

        // Add your email confirmation logic here
        // For simplicity, this example just checks if the email is not empty
        if (email !== '') {
            // If email is confirmed, send an AJAX request to the server
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'confirm_email.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Email confirmed, hide the email input and confirm button
                        emailInput.style.display = 'none';
                        document.querySelector('button[onclick="confirmEmail()"]').style.display = 'none';

                        // Show the password reset fields
                        passwordResetFields.style.display = 'block';

                        console.log(xhr.responseText); // Log the server response
                    } else {
                        alert('Error confirming email. Please try again.');
                    }
                }
            };

            // Send the email and password to the server
            var data = JSON.stringify({ Email: email, Password: password });
            xhr.send(data);
        } else {
            alert('Please enter a valid email address.');
        }
    }
}