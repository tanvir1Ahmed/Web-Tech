<?php
    include_once "conn.php";
    $id = $_GET["id"];
    $query = "DELETE FROM results WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: courses.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?> 