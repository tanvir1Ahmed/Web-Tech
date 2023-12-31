<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="../controller/css/courses.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
       
    </style>
</head>

<body>
    <section>
        <h1>Courses</h1>
        <div class="container">
            <form action="courseadddata.php" method="post">
                <label for="course_title">Course Title</label>
                <input type="text" name="course_title" id="course_title" class="form-control" required>

                <label for="course_id">Course ID</label>
                <input type="text" name="course_id" id="course_id" class="form-control" required>

                <label for="course_price">Course Price (USD) </label>
                <input type="number" name="course_price" id="course_price" class="form-control" required>

                <label for="course_duration">Course Duration</label>
                <input type="text" name="course_duration" id="course_duration" class="form-control" required>

                <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </form>
        </div>
    </section>
    <section>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Title</th>
                        <th>Course ID</th>
                        <th>Course Price (USD) </th>
                        <th>Course Duration</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM results";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $CourseTitle = $row['course_title'];
                                $CourseID = $row['course_id'];
                                $CoursePrice = $row['course_price'];
                                $CourseDuration = $row['course_duration'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $CourseTitle; ?></td>
                        <td><?php echo $CourseID; ?></td>
                        <td><?php echo $CoursePrice; ?></td>
                        <td><?php echo $CourseDuration; ?></td>
                        <td><a href="courseeditdata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="coursedeletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
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
