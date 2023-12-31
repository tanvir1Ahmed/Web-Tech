<?php
include"../Model/mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $con = new mysqli('localhost', 'root', '', 'course_database');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $courseId = isset($_POST["courseid"]) ? $_POST["courseid"] : null;

    if ($courseId !== null) {
      
        $stmt = $con->prepare(getDeleteCourseQuery());

        if ($stmt) {
            $stmt->bind_param("s", $courseId);

            if ($stmt->execute()) {
                $stmt->close();
                $con->close();
                header("Location: ../Main/courses.php");
                exit();
            } else {
                echo "Error executing the query: " . $stmt->error;
            }
        } else {
            echo "Error preparing the statement: " . $con->error;
        }
    } else {
        header("Location: ../Main/Delete_course.php");
        exit();
    }
}
?>
