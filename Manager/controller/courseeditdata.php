<?php
include_once "conn.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM results WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $course_title = $row['course_title'];
        $course_id = $row['course_id'];
        $course_price = $row['course_price'];
        $course_duration = $row['course_duration'];
    } else {
        echo "Course not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

if (isset($_POST['update'])) {
    $new_course_title = $_POST['course_title'];
    $new_course_id = $_POST['course_id'];
    $new_course_price = $_POST['course_price'];
    $new_course_duration = $_POST['course_duration'];

    if ($new_course_title != "" && $new_course_id != "" && $new_course_price != "" && $new_course_duration != "") {
        $update_query = "UPDATE results SET
            course_title = '$new_course_title',
            course_id = '$new_course_id',
            course_price = $new_course_price,
            course_duration = '$new_course_duration'
            WHERE id = '$id'";

        if (mysqli_query($conn, $update_query)) {
            header("location: courses.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Course Title, Course ID, Course Price, and Course Duration cannot be empty!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="../controller/css/courses.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>

<body>
    <section>
    <h1>Edit Course</h1>
    <div class="container">
    <form action="" method="post">
        <label for="course_title">Course Title</label>
        <input type="text" name="course_title" id="course_title" class="form-control" value="<?php echo $course_title; ?>" required>

        <label for="course_id">Course ID</label>
        <input type="text" name="course_id" id="course_id" class="form-control" value="<?php echo $course_id; ?>" required>

        <label for="course_price">Course Price (USD)</label>
        <input type="number" name="course_price" id="course_price" class="form-control" value="<?php echo $course_price; ?>" required>

        <label for="course_duration">Course Duration</label>
        <input type="text" name="course_duration" id="course_duration" class="form-control" value="<?php echo $course_duration; ?>" required>

        <input type="submit" name="update" value="Update" class="btn btn-primary">
    </form>
</section>
</body>

</html>
