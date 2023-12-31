<?php
class signUp_validation_1
{

    function inputJsonData()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["Username"]) && !empty($_POST['Password'])) {
                $formdata = array(
                    'Email' => $_POST['Username'],
                    'Password' => $_POST['Password'],
                );
                $jsondata = json_encode($formdata);
                if (file_put_contents('../Controller/js/login.json', $jsondata)) {
                    session_start();
                    $_SESSION["Email"]=$_POST["Username"];
                    $_SESSION["Password"]=$_POST["Password"];
                } else {
                    echo 'No data saved';
                }
            }
        }
    }
    function jsonData()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (
                !empty($_GET['name']) && !empty($_GET['age']) && !empty($_GET['gender']) && !empty($_GET['country']) && !empty($_GET['Institution'])
                && !empty($_GET['imageUpload'])
            ) {
                $formdata = array(
                    'Name' => $_GET['name'],
                    'Age' => $_GET['age'],
                    'Gender' => $_GET['gender'],
                    'Country' => $_GET['country'],
                    'Institution' => $_GET['Institution'],
                    'Image' => $_GET['imageUpload'],
                );

                $jsondata = json_encode($formdata);
                if (file_put_contents('../Model/profile.json', $jsondata)) {
                    echo '<br>Data saved successfully';
                    header("Location: SignUp2.php");
                    exit();
                } else {
                    echo 'No data saved';
                }

            }
        }
    }

}
?>