<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../controller/css/courses.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <style>
        /* Your styles here */
    </style>
</head>

<body>
    <section>
        <h1>Teachers</h1>
        <div class="container">
            <form action="addteacherdata.php" method="post">
                <label for="teacher_id">Teacher ID</label>
                <input type="text" name="teacher_id" id="teacher_id" class="form-control" required>

                <label for="teacher_first_name">Teacher First Name</label>
                <input type="text" name="teacher_first_name" id="teacher_first_name" class="form-control" required>

                <label for="teacher_last_name">Teacher Last Name</label>
                <input type="text" name="teacher_last_name" id="teacher_last_name" class="form-control" required>

                <label for="teacher_email">Teacher Email</label>
                <input type="email" name="teacher_email" id="teacher_email" class="form-control" required>

                <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </form>
        </div>
    </section>
    <section>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        
                        <th>Teacher ID</th>
                        <th>Teacher First Name</th>
                        <th>Teacher Last Name</th>
                        <th>Teacher Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "teacherdb.php";
                    $sql_query = "SELECT * FROM teachers";
                    if ($result = $conn->query($sql_query)) {
                        while ($row = $result->fetch_assoc()) {
                            $TeacherID = $row['teacher_id'];
                            $TeacherFirstName = $row['teacher_first_name'];
                            $TeacherLastName = $row['teacher_last_name'];
                            $TeacherEmail = $row['teacher_email'];
                    ?>
                            <tr class="trow">
                                <td><?php echo $TeacherID; ?></td>
                                <td><?php echo $TeacherFirstName; ?></td>
                                <td><?php echo $TeacherLastName; ?></td>
                                <td><?php echo $TeacherEmail; ?></td>
                                <td><a href="editteacherdata.php?id=<?php echo $TeacherID; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="deleteteacherdata.php?id=<?php echo $TeacherID; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
