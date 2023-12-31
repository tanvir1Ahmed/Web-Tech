<?php
session_start();
require_once('../model/database.php');
 
$errors = array();
 
// Create a new Database instance
$db = new Database();
$conn = $db->getConnection();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST["student_name"];
    $feedbackMessage = $_POST["feedback_message"];
    $feedbackRating = $_POST["feedback_rating"];
 
    $insertStmt = $conn->prepare("INSERT INTO feedback (student_name, rating, message) VALUES (?, ?, ?)");
    $insertStmt->bind_param("sis", $studentrName, $feedbackRating, $feedbackMessage);
 
    if ($insertStmt->execute()) {
        // Feedback inserted successfully
    } else {
        echo "Data is not saved. Error: " . $insertStmt->error;
    }
 
    $insertStmt->close();
}
 
// Fetch existing feedback from the database
$selectStmt = $conn->prepare("SELECT student_name, rating, message FROM feedback");
$selectStmt->execute();
$selectStmt->bind_result($studentName, $feedbackRating, $feedbackMessage);
 
$feedbackData = array();
while ($selectStmt->fetch()) {
    $feedbackData[] = [
        "student_name" => $studentName,
        "rating" => $feedbackRating,
        "message" => $feedbackMessage
    ];
}
 
$selectStmt->close();
$conn->close();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Feedback</title>
 
</head>
<body>
 
    <form method="post" action="student_feedback.php">
        <h2 style="text-align: center;">student Feedback</h2>
 
        <label for="student_name">student Name:</label>
        <input type="text" name="student_name" required>
 
        <label for="feedback_message">Feedback Message:</label>
        <textarea name="feedback_message" rows="4" cols="50" required></textarea>
 
        <label for="feedback_rating">Rating (1-5):</label>
        <input type="number" name="feedback_rating" min="1" max="5" required>
 
        <button type="submit">Submit Feedback</button>
    </form>
 
    <h2 style="text-align: center;">Existing Feedback</h2>
    <ul>
        <?php foreach ($feedbackData as $feedback): ?>
            <li>
                <strongs> Student Name:</strong> <?php echo $feedback["student_name"]; ?><br>
                <strong>Rating:</strong> <?php echo $feedback["rating"]; ?><br>
                <strong>Message:</strong> <?php echo $feedback["message"]; ?>
            </li>
        <?php endforeach; ?>
    </ul>
 
    <!-- Back button -->
    <button id="backButton" onclick="goBack()">Go Back</button>
 
    <script>
        // JavaScript function to go back
        function goBack() {
            window.history.back();
        }
    </script>
 
</body>
</html>