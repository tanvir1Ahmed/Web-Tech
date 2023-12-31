<?php
include_once "teacherdb.php";
$id = $_GET["id"];
$query = "DELETE FROM teachers WHERE teacher_id = '$id'";
if (mysqli_query($conn, $query)) {
    header("location: teachers.php");
} else {
    echo "Something went wrong. Please try again later.";
}
?>
