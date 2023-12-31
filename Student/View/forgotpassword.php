<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="pass">
        <h2>Reset Password</h2>
        <p>Enter your email address to confirm and set a new password.</p>
        <form id="resetForm">
            <input type="email" id="emailInput" placeholder="Email" required>
            <button type="button" onclick="confirmEmail()">Confirm Email</button>

            <div class="password-reset" id="passwordResetFields">
                <input type="password" placeholder="New Password" required>
                <input type="password" placeholder="Confirm Password" required>
                <button class="Edit" type="submit">Reset Password</button>
            </div>
        </form>
    </div>
    <script src="profile.js"></script>
</body>

</html>