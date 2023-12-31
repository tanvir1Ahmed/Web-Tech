<?php include("../Model/studetnSignUpDatabase.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>Account Information</h1>
        </div>
        <div class="column1">
            <a href="#">
                <div class="general" onmouseover="mOver(this)" onmouseout="mOut(this)" onclick="bringToFront1('box1')">
                    <b>General</b>
                </div>
            </a>
            <a href="#">
                <div class="general" onmouseover="mOver(this)" onmouseout="mOut(this)" onclick="bringToFront2('box2')">
                    Forget password</div>
            </a>
            <a href="#">
                <div class="general" onmouseover="mOver(this)" onmouseout="mOut(this)" onclick="bringToFront3('box3')">
                    Biography</div>
            </a>
            <a href="#">
                <div class="general" onmouseover="mOver(this)" onmouseout="mOut(this)" onclick="bringToFront4('box4')">
                    Enrolled courses</div>
            </a>
        </div>
        <div class="General_box" id="box1">
            <div class="details">
                <?php
                $s = new signUpDatabase();
                $s->decodeJsonData();
                ?>
                <form method="POST">
                    <b>Id:</b>
                    <input type="text" name="id" value="<?php echo $s->id; ?>" readonly><br>
                    <b>Name:</b>
                    <input type="text" name="name" value="<?php echo $s->name; ?>"><br>
                    <b>Email:</b>
                    <input type="text" name="email" value="<?php echo $s->Email; ?>"><br>
                    <b>Phone:</b><br>
                    <input type="text" name="phone" value="<?php echo $s->phone; ?>"><br>
                    <button type="submit" class="Edit" name="Edit" id="Edit">
                        <h3>Edit</h3>
                    </button>
                    <button type="submit" class="delete" name="delete" id="delete">
                        <h3>Delete</h3>
                    </button>
                    <?php
                    if (isset($_POST["Edit"])) {
                        //edit function
                        $s->updateStudentInfo($_POST['id'], $_POST["name"], $_POST["email"], $_POST["phone"]);
                    } else if (isset($_POST["delete"])) {
                        //delete function
                        $s->deleteStudentInfo();
                    }
                    ?>
                </form>

            </div>
        </div>
        <div class="chng_password_box" id="box2">
            <div class="pass">
                <h2>Reset Password</h2>
                <p>Enter your email address to confirm and set a new password.</p>
                <form id="resetForm">
                    <input type="email" id="emailInput" placeholder="Email" required>
                    <button type="button" onclick="confirmEmail()">Confirm Email</button>

                    <div class="password-reset" id="passwordResetFields">
                        <input type="password" placeholder="New Password" required>
                        <input type="password" placeholder="Confirm Password" required>
                        <button type="submit">Reset Password</button>
                    </div>
                    <?php
                    header('Content-Type: application/json');

                    // Read the raw POST data
                    $data = json_decode(file_get_contents('../Controller/js/login.json'), true);

                    if ($data && isset($data['Email'], $data['Password'])) {
                        // Replace this with your actual email confirmation logic
                        if ($data['Email'] === 'tanvir@gmail.com' && $data['Password'] === 'Wmcbz#@*1') {
                            http_response_code(200);
                            echo json_encode(['message' => 'Email confirmed successfully']);
                        } else {
                            http_response_code(400);
                            echo json_encode(['error' => 'Invalid email or password']);
                        }
                    } else {
                        http_response_code(400);
                        echo json_encode(['error' => 'Invalid data']);
                    }
                    ?>

                </form>
            </div>
        </div>
        <div class="biograph_box" id="box3">
            biograpgh
        </div>
        <div class="enrolled_box" id="box4">
            enrolled course
        </div>
    </div>
    <script src="../Controller/js/profile.js"></script>
</body>
<script src="../Controller/js/jquery-3.7.1.min.js"></script>

</html>