<?php
include_once "studentdb.php";
$id = $_GET["id"];
$query = "DELETE FROM stdent WHERE student_id = '$id'";
if (mysqli_query($conn, $query)) {
    header("location: students.php"); // Redirect to teachers.php (or any desired page)
} else {
    echo "Something went wrong. Please try again later.";
}
?>
