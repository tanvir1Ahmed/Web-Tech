<?php include("../Model/studetnSignUpDatabase.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="placeholder.css">
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form class="box" aciton="/myaction.php" name="myForm" onsubmit="return validateForm()" method="post">
            <div class="formdesign" id="name">
                <input type="text" name="fname" placeholder="Name..."><br><b><span class="formerror"> </span></b>
            </div>
            <br>

            <div class="formdesign" id="email">
                <input type="email" name="femail" placeholder="Email..."><br><b><span class="formerror"> </span></b>
            </div>
            <br>

            <div class="formdesign" id="phone">
                <input type="phone" name="fphone" placeholder="Phone..."><br><b><span class="formerror"></span></b>
            </div>
            <br>

            <div class="formdesign" id="pass">
                <input type="password" name="fpass" placeholder="Password..."><br><b><span class="formerror" </span></b>
            </div>
            <br>

            <div class="formdesign" id="cpass">
                <input type="password" name="fcpass" placeholder="Confirm password..."><br><b><span
                        class="formerror"></span></b>
            </div>
            <br>

            <input class="but" type="submit" value="Submit">

        </form>
    </div>
    <script src="../Controller/SignUp.js"></script>
    <?php
    $a = new signUpDatabase();
    $a->query();
    ?>
</body>



</html>