<?php
include_once "teacherdb.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM teachers WHERE teacher_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $teacher_id = $row['teacher_id'];
        $teacher_first_name = $row['teacher_first_name'];
        $teacher_last_name = $row['teacher_last_name'];
        $teacher_email = $row['teacher_email'];
    } else {
        echo "Teacher not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

if (isset($_POST['update'])) {
    $new_teacher_first_name = $_POST['teacher_first_name'];
    $new_teacher_last_name = $_POST['teacher_last_name'];
    $new_teacher_email = $_POST['teacher_email'];

    if ($new_teacher_first_name != "" && $new_teacher_last_name != "" && $new_teacher_email != "") {
        $update_query = "UPDATE teachers SET
            teacher_first_name = '$new_teacher_first_name',
            teacher_last_name = '$new_teacher_last_name',
            teacher_email = '$new_teacher_email'
            WHERE teacher_id = '$id'";

        if (mysqli_query($conn, $update_query)) {
            header("location: teachers.php");
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
    <title>Edit Teacher</title>
</head>

<body>
    <section>
        <h1>Edit Teacher</h1>
        <div class="container">
            <form action="" method="post">
                <label for="teacher_first_name">Teacher First Name</label>
                <input type="text" name="teacher_first_name" id="teacher_first_name" class="form-control" value="<?php echo $teacher_first_name; ?>" required>

                <label for="teacher_last_name">Teacher Last Name</label>
                <input type="text" name="teacher_last_name" id="teacher_last_name" class="form-control" value="<?php echo $teacher_last_name; ?>" required>

                <label for="teacher_email">Teacher Email</label>
                <input type="email" name="teacher_email" id="teacher_email" class="form-control" value="<?php echo $teacher_email; ?>" required>

                <input type="submit" name="update" value="Update" class="btn btn-primary">
            </form>
        </div>
    </section>
</body>

</html>
