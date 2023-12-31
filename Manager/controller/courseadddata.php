<?php
include_once "conn.php";

if(isset($_POST['submit'])){
    $course_title = $_POST['course_title'];
    $course_id = $_POST['course_id'];
    $course_price = $_POST['course_price'];
    $course_duration = $_POST['course_duration'];

    if($course_title != "" && $course_id != "" && $course_price != "" && $course_duration != ""){
        $sql = "INSERT INTO results (`course_title`, `course_id`, `course_price`, `course_duration`) VALUES ('$course_title', '$course_id', $course_price, '$course_duration')";
        if (mysqli_query($conn, $sql)) {
            header("location: courses.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Course Title, Course ID, Course Price, and Course Duration cannot be empty!";
    }
}
?>
