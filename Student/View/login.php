<?php include("../Model/studetnSignUpDatabase.php"); ?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form class="box" action="" method="POST">
            Eamil: <input type="text" name="Username"><br><br>
            Password: <input type="password" name="Password"><br><br>
            <div class="abc">
                <a href="SignUp.php">Create account</a>&nbsp&nbsp&nbsp
                <a href="forgotpassword.php">Forgot Password</a>
            </div>
            <?php
            $a = new signUpDatabase();
            $a->login();
            ?>
            <br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>