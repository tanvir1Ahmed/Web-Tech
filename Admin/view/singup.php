<?
session_start();
  include('../control/process.php')
?>

<html>
    <head>

</head>

<body>
    
    

    <h1>Singup Form</h2>
    <form action ="singup.php" method ="$_POST">
        <label for ="username">Username: </label>
        <input type ="text" name ="uesername" required><br>

        <label for ="password">Password: </label>
        <input type ="password" name = "password" required><br>

        <label for = "email"> Email: </label>
        <input type = "text" name = "email" required><br>

        <label for = "address">Address: </label>
        <input type = "text" name = "address" required><br>

        <input type ="radio" name="gender" value="female">female
        <input type = "radio" name="gender" value="male">male
        <input type = "radio" name ="gender" value="other">Other

        <form method="post" action="submit"<? echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>



        <title> Submit Button Example</title>
        <form action = "/submit" method = "$_POST">
            <input type = "submit" value ="Submit">






</form>


</body>


    </html>