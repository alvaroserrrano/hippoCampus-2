<?php

if(isset($_POST['signup-submit'])){
    
    require 'dhb.inc.php';

    $username = test_input($_POST['uid']);
    $email = test_input($_POST['mailuid']);
    $password = test_input($_POST['pwd']);
    $passwordRepeat = test_input($_POST['pwdRepeat']);


}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}