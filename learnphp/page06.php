<?php
    error_reporting(E_ALL);
    ini_set('display_errors', true);
    ini_set('html_errors', false);
    $user = $_GET["user"];
    $pass = $_GET["pass"];

    $username = strcmp($user, "Nat");
    $password = strcmp($pass, "boop");

    if ($username == 0 && $password == 0) {
        echo "You did it!";
    }
    elseif($user == null || $pass == null){
        echo "Please enter Username and/or Password";
    }
    else {
        echo "Access Denied";
    }


?>
