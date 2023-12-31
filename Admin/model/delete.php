<?php
if ( isset ($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername ="localhost";
    $username = "root";
    $password = "";
    $database = "admin";

    //create connection
    $conn = new  mysqli($servername, $username, $password, $database);
    
    $sql = "DELETE FROM students WHERE id=$id";
    $connection->query($sql);
    if($results->num_rows >0){
        while ($row = $resut->fetch_assoc()) {
            $data = $row;
        }
        //encoding data into json file
        $json_data = json_encode($data,JSON_PRETTY_PRINT);
        file_put_contents('test.json', $json_data);
        //printing data encoding in json
        //echo $json_data;
    }else {
        echo "No results found";
    }
    $conn->close();


}
?>

header("location: /model/index.php");
exit;
?>