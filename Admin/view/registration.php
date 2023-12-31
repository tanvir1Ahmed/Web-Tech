<?php

include ('../control/process.php');
include ('../control/process.php');
?>

<html>
    <head>
</head>
<body>


h1>Singup Form</h2>
        <form action ="login.php" method="$_POST">
            <label for="username">Username:</label>
            <input type="text" name="username"required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <label for="address">Address:</label>
            <input type="text" name="address"required><br>

            <input type="submit value"name ="submit">

</body>
</html>