<?php
echo "Welcome to cookies<br>";
$data=json_decode(file_get_contents("profile.json"),true);
echo $data['Name']."<br>";
setcookie("name",$data['Name'],time()+86400,"/");
if(isset($_COOKIE['name']))
{
    if($_COOKIE['name']!=="")
    
    echo $_COOKIE["name"];
    
}
else
{
    echo "Cookie is not set.";
}
?>

