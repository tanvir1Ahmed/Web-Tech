<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "admin";



//Create Connection
$id="";
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage ="";
$_successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //Get method:Show the data of the students

    if (!isset($_GET["id"]) ) {
        header("location: /model/index.php");
        exit;
    }

    $id = $_GET["id"];
//read the row of the selected student from database table

    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /model/index.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];


}
else {
    //POST method : Update the data of the students table

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if ( empty($id) || empty($name) || empty($email) || $empty($phone) || empty($address)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE students" .
        "SET name = '$name', email = '$email', phone = '$phone', address = '$address' " .
        "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Client updated correctly";

        header("location: /model/index.php");
        exit;

    }while (true);

}
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection faild".$conn->connect_error);
}

//fetching data by using associative array
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data =$row;
    }
    //encodeing data into json file
    $json_data = json_encode($data,JSON_PRETTY_PRINT);
    file_put_contents('test.json',$json_data);
    //printing data encoding in json
    //echo $json_data;
    
}else{
    echo "No results found";
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>model</title>
    <link rel="stylesheet" href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=admin&table=students">
    <script> scr="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=admin&table=students"</script>

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
            <input type = "hidden" name= "id" value= "<?php echo $id; ?>">
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