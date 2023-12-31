<?php
include("../Controller/signUp validation 1.php");
include("../Controller/logout.php");
session_start();
class signUpDatabase
{
    public $conn;
    public function connectDatabase()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";

        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("connection failed" . $this->conn->connect_error);
        }
    }
    function query()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->connectDatabase();

            $name = $_POST["fname"];
            $email = $_POST["femail"];
            $phone = $_POST["fphone"];
            $password = $_POST["fpass"];

            
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = $this->conn->query($sql);
            if ($result) {
                $row = $result->fetch_assoc();
            }
            $this->conn->close();
            if ($row === null) {
                // Insert data into the database
                $this->connectDatabase();
                $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
                if ($this->conn->query($sql)) {
                    //echo "<br>Data inserted";
                    echo "<script>function showSuccessMessage() {alert('Operation Successful!');}</script>";
                    header("Location: ../View/login.php");
                    exit();

                } else {
                    echo "<br> Error" . $this->conn->error;
                }
                $this->conn->close();

            } else {
                echo "<b class='duplicate'>*Duplicalicate email*</b>";
            }


        }
    }

    function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["Username"];
            $pass = $_POST["Password"];
            if (!empty($_POST["Username"]) && !empty($_POST["Password"])) {

                $this->connectDatabase();
                $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
                $result = $this->conn->query($sql);
                if ($result) {
                    $row = $result->fetch_assoc();
                }
                $this->conn->close();
                if ($row === null) {
                    echo "<br><br><b>*Invalid username or password</b>";

                } else {
                    $j = new signUp_validation_1();
                    $j->inputJsonData();
                    header("Location: Homepage.php");
                    exit();
                }
            } else {
                echo "<br><br><b>*Fill up all fields.</b>";
            }
        }
    }

    //decoding json data in order to do query
    public $id, $name, $Email, $phone;

    function decodeJsonData()
    {
        $this->connectDatabase();

        $jsonData = file_get_contents("../Model/login.json");
        $data = json_decode($jsonData, true);

        if ($data !== null) {
            $email = $data['Email'];
            $password = $data['Password'];
        }

        $sql = "SELECT id, name, email, phone FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->Email = $row['email'];
            $this->phone = $row['phone'];
        }
        $this->conn->close();
    }

    //student information update function
    function updateStudentInfo($id, $name, $email, $phone)
    {
        $this->connectDatabase();
        $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone' WHERE id = $id";
        $this->conn->query($sql);
        $this->conn->close();
    }

    //delete studetn information
    function deleteStudentInfo()
    {
        $this->connectDatabase();
        $sql = "DELETE FROM users WHERE id='$this->id'";
        $this->conn->query($sql);
        $this->conn->close();
        $s = new endSession();
        $s->end();
    }
}
?>