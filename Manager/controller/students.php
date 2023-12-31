<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../controller/css/courses.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        /* Your styles here */
    </style>
</head>

<body>
    <section>
        <h1>Students</h1>
        <div class="container">
            <form action="addstudentdata.php" method="post">
                <label for="student_id">Student ID</label>
                <input type="text" name="student_id" id="student_id" class="form-control" required>

                <label for="student_first_name">Student First Name</label>
                <input type="text" name="student_first_name" id="student_first_name" class="form-control" required>

                <label for="student_last_name">Student Last Name</label>
                <input type="text" name="student_last_name" id="student_last_name" class="form-control" required>

                <label for="student_email">Student Email</label>
                <input type="email" name="student_email" id="student_email" class="form-control" required>

                <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </form>
        </div>
    </section>
    <section>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        
                        <th>Student ID</th>
                        <th>Student First Name</th>
                        <th>Student Last Name</th>
                        <th>Student Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "studentdb.php";
                    $sql_query = "SELECT * FROM stdent";
                    if ($result = $conn->query($sql_query)) {
                        while ($row = $result->fetch_assoc()) {
                            $StudentID = $row['student_id'];
                            $StudentFirstName = $row['student_first_name'];
                            $StudentLastName = $row['student_last_name'];
                            $StudentEmail = $row['student_email'];
                    ?>
                            <tr class="trow">
                                <td><?php echo $StudentID; ?></td>
                                <td><?php echo $StudentFirstName; ?></td>
                                <td><?php echo $StudentLastName; ?></td>
                                <td><?php echo $StudentEmail; ?></td>
                                <td><a href="editstudentdata.php?id=<?php echo $StudentID; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="deletestudentdata.php?id=<?php echo $StudentID; ?>" class="btn btn-danger">Delete</a></td>
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
