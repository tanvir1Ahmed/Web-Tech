<?php
if (isset($_POST['courseId'])) {
    $courseId = $_POST['courseId'];
    // Do something with $courseId, for example, save it to a file or a database
    echo 'PHP received courseId: ' . $courseId;
} else {
    echo 'Error: courseId not set.';
}
?>
