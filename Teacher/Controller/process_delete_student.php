<?php
include"../Model/mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $con = new mysqli('localhost', 'root', '', 'student_database');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $student_id = isset($_POST["student_id"]) ? $_POST["student_id"] : null;

    if ($student_id !== null) {
      
        $stmt = $con->prepare(getDeletestudentQuery());

        if ($stmt) {
            $stmt->bind_param("s", $student_id);

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
    } else {
        header("Location: ../Main/delete_student.php");
        exit();
    }
}
?>
