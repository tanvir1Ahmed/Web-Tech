<?php
class Session
{
    function remember($user, $pass)
    {
        session_start();
        $_SESSION["Username"] = $user;
        $_SESSION["Password"] = $pass;
    }

    function active()
    {
        if (isset($_SESSION["Username"]) && isset($_SESSION["Password"])) {
            $myFile = fopen("panel1.txt", "r") or die("Unable to open file");
            echo fread($myFile, filesize("panel1.txt"));
            fclose($myFile);
        }
    }
}

?>