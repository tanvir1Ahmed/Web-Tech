<?php
include_once "teacherdb.php";

if(isset($_POST['submit'])){
    $teacher_id = $_POST['teacher_id'];
    $teacher_first_name = $_POST['teacher_first_name'];
    $teacher_last_name = $_POST['teacher_last_name'];
    $teacher_email = $_POST['teacher_email'];

    if($teacher_id != "" && $teacher_first_name != "" && $teacher_last_name != "" && $teacher_email != ""){
        $sql = "INSERT INTO teachers (`teacher_id`, `teacher_first_name`, `teacher_last_name`, `teacher_email`) VALUES ('$teacher_id', '$teacher_first_name', '$teacher_last_name', '$teacher_email')";
        if (mysqli_query($conn, $sql)) {
            header("location: teachers.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Teacher ID, First Name, Last Name, and Email cannot be empty!";
    }
}
?>
