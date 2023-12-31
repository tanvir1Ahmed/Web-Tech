<?php
include"../Model/mydb.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $con = new mysqli('localhost', 'root', '', 'student_database');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $student_institution = $_POST['student_institution'];
    $student_email = $_POST['student_email'];
    $student_gender = $_POST['Student_gender'];
    $student_password = $_POST['student_password'];

    $stmt = $con->prepare(getaddstudent());

    if ($stmt) {
        $stmt->bind_param("ssssss", $student_name, $student_id, $student_institution, $student_email, $student_gender, $student_password);

        if ($stmt->execute()) {
            $stmt->close();
            $con->close();
            header("Location: ../Main/Student.php");
            exit();
        } else {
            echo "Error executing the query: " . $stmt->error;
        }
    } else {
        echo "Error preparing the statement: " . $con->error;
    }
}
?>
