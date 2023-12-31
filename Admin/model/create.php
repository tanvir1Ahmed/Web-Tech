<?php

$servername ="localhost";
$username = "root";
$password = "";
$database = "admin";

//create connection
$conn = new  mysqli($servername, $username, $password, $database);
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage ="";
$_successMessage = "";



if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($address)){
            $errorMessage = "All fiels are required";
            break;

        }

        //add new client to database
        $sql = "INSERT INTO students (name , email, phone, address)" .
        "VALUES ('$name', $phone', $address')";
        $result = $connection-> query ($sql);

        if (!$result){
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }


        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $successMessage = "Student added correctly";

        header("location:/model/index.php");
        exit;



    } while (false);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>model</title>
    <link rel="stylesheet" href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=admin">
    <script> scr=""</script>

</head>
<body>
    <div class="container my-5">
        <h2>New students</h2>
        <?php
        if ( !empty($errorMessage)) {
            echo "
            <div class = alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type = 'button' class='btn-close' data-bs-dismiss ='alert' aria-lable ='Close'></br>
            </div>
            ";

        }
        ?>
        <form method ="post">
            <div class="row mb-3">
                <lable class ="col-sm-3 col-form-lable">Name</lable>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
</div>
<div class="row mb-3">
                <lable class ="col-sm-3 col-form-lable">Email</lable>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
</div>
<div class="row mb-3">
                <lable class ="col-sm-3 col-form-lable">Phone</lable>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
</div>
<div class="row mb-3">
                <lable class ="col-sm-3 col-form-lable">Address</lable>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
</div>
<?php
if ( !empty($successMessage)) {
    echo "<div class='row mb-3'>
    <div class ='offset-sm-3 col-sm-6'>
    <div class = alert alert-success alert-dismissible fade show' role='alert'>
    <strong>$successMessage</strong>
    <button type = 'button' class='btn-close' data-bs-dismiss ='alert' aria-lable ='Close'></br>
    </div>
    ";
}

?>
<div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type ="submit" class="btn btn-primary">Submit</button>
</div>
<div class="col-sm-3 d grid">
    <a class= "btn btn-outline-primary" href="/model/index.php" role="buton">Cancel</a>
</form>
</div>
</body>
</html>