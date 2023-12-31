<?php
class course
{
    function courseJsonFile()
    {
        //Data conncetion
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("connection failed" . $conn->connect_error);
        }

        //fetching data by using associative array
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            //encoding data into json file
            $json_data = json_encode($data, JSON_PRETTY_PRINT);
            file_put_contents('../View/course.json', $json_data);
            //printing data encoding in json
            //echo $json_data;
        } else {
            echo "No results found";
        }
        $conn->close();
    }
}
?>