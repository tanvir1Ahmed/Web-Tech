<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../controller/css/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
    
    
</head>
<body>

    <h1 >Manager Dashboard</h1>
    <h2 >Welcome, <?php echo $_SESSION["user"]["first_name"]; ?>!</h2>

    <table border="1">
        <tr>
            <td >
                <ul>
                    <li><a href="../controller/courses.php">COURSES</a></li>
                    <li><a href="../controller/teachers.php">TEACHERS</a></li>
                    <li><a href="../controller/students.php">STUDENTS</a></li>
                    <li><a href="../controller/notification.php">FEEDBACK</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </td>

            
        </tr>
    </table>

</body>
</html>
