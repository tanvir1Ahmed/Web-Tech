<?php
require_once('../model/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    $first_name = ($_POST["first_name"]);
    $last_name = ($_POST["last_name"]);
    $email = ($_POST["email"]);
    $password = ($_POST["password"]);
    $dob = $_POST["dob"];
    $gender = ($_POST["gender"]);
    $country = $_POST["country"];
    $phone = ($_POST["phone"]);
    $nid = ($_POST["nid"]);
    $education = $_POST["education"];
    $terms = isset($_POST["terms"]) ? "Agreed" : "Not Agreed";

    if (empty($errors)) {
        $db = new Database();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, dob, gender, country, phone, nid, education, terms) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $first_name, $last_name, $email, $password, $dob, $gender, $country, $phone, $nid, $education, $terms);

        if ($stmt->execute()) {
            header("Location: ../views/login.php");
            exit();
        } else {
            echo "Data is not saved. Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
} else {
    echo "Invalid request!";
}



?>
