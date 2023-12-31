<?php
include_once "studentdb.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM stdent WHERE student_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $student_first_name = $row['student_first_name'];
        $student_last_name = $row['student_last_name'];
        $student_email = $row['student_email'];
    } else {
        echo "Student not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

if (isset($_POST['update'])) {
    $new_student_first_name = $_POST['student_first_name'];
    $new_student_last_name = $_POST['student_last_name'];
    $new_student_email = $_POST['student_email'];

    if ($new_student_first_name != "" && $new_student_last_name != "" && $new_student_email != "") {
        $update_query = "UPDATE stdent SET
            student_first_name = '$new_student_first_name',
            student_last_name = '$new_student_last_name',
            student_email = '$new_student_email'
            WHERE student_id = '$id'";

        if (mysqli_query($conn, $update_query)) {
            header("location: students.php"); // Redirect to teachers.php (or any desired page)
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "First Name, Last Name, and Email cannot be empty!";
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
    <title>Edit Student</title>
</head>

<body>
    <section>
        <h1>Edit Student</h1>
        <div class="container">
            <form action="" method="post">
                <label for="student_first_name">Student First Name</label>
                <input type="text" name="student_first_name" id="student_first_name" class="form-control" value="<?php echo $student_first_name; ?>" required>

                <label for="student_last_name">Student Last Name</label>
                <input type="text" name="student_last_name" id="student_last_name" class="form-control" value="<?php echo $student_last_name; ?>" required>

                <label for="student_email">Student Email</label>
                <input type="email" name="student_email" id="student_email" class="form-control" value="<?php echo $student_email; ?>" required>

                <input type="submit" name="update" value="Update" class="btn btn-primary">
            </form>
        </div>
    </section>
</body>

</html>
