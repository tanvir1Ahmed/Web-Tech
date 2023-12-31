<?php


if(isset($_POST['submit'])){
    if(empty($_POST['name']))
    {
        echo "name cant be empty";
    }
}
else
{
    
    echo $_GET["name"];
    echo $_POST["name"];
}

echo $_POST["email"];
echo $_GET["email"];

?>
