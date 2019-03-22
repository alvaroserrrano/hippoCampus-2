<?php

if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $email = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($email) || empty($password))){
        header("Location: ..index.php?error=emptyfields");
    exit();
    }

}else{
    header("Location: ..index.php");
    exit();
}
