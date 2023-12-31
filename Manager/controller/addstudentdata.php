<?php
include_once "studentdb.php";

if(isset($_POST['submit'])){
    // Collect and sanitize input data
    $student_id = $_POST['student_id'];
    $student_first_name = $_POST['student_first_name'];
    $student_last_name = $_POST['student_last_name'];
    $student_email = $_POST['student_email'];

    // Validate and insert data into the database
    if($student_id != "" && $student_first_name != "" && $student_last_name != "" && $student_email != ""){
        $sql = "INSERT INTO stdent (`student_id`, `student_first_name`, `student_last_name`, `student_email`) VALUES ('$student_id', '$student_first_name', '$student_last_name', '$student_email')";
        if (mysqli_query($conn, $sql)) {
            header("location: students.php"); // Redirect to teachers.php (or any desired page)
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Student ID, First Name, Last Name, and Email cannot be empty!";
    }
}
?>
