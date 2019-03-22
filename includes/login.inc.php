<?php

if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $email = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($email) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
    exit();
    }else{
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?error=emptyfields");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        }
    }

}else{
    header("Location: ..index.php");
    exit();
}
