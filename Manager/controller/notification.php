<?php
// Read notification data from JSON file
$jsonData = file_get_contents("../Data/notifications.json");
$notifications = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Notifications</title>
    
</head>
<body>

    <h2>Notifications</h2>
    
    <table border="1">
        <tr>
            <th>Message</th>
        </tr>
        <?php foreach ($notifications as $notification): ?>
            <tr>
                <td><?php echo $notification["message"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

