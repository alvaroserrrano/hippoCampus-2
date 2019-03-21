<?php

if(isset($_POST['signup-submit'])){
    
    require 'dhb.inc.php';

    $userName = mysqli_real_scape_string($connect, $_POST['uid']);
    $email = mysqli_real_scape_string($connect, $_POST['mailuid']);
    $password = mysqli_real_scape_string($connect, $_POST['pwd']);
    $passwordRepeat = mysqli_real_scape_string($connect, $_POST['pwdRepeat']);

    //Check if any field is empty
    if (empty($userName) || empty($last) || empty($email) || empty($uid) || empty($pwd) ) {
        header("Location: ../signup.php?signup=empty");
    exit();
    }else{
        //Check if userName is valid
        if(!preg_match("/^[a-zA-Z]*$/", $userName)){
            header("Location: ../signup.php?signup=invalid");
            exit();    
        }else{
            //Check email is valid
            if(!filter_var("$email", FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=email");
            exit();
            }
            else{
                $sql = "SELECT * FROM users WHERE username = '$userName";
                $result = mysqli_query($connect, $sql);
                $resultcheck = mysqli_num_rows($results);
                //Check that userName has already been taken
                if($resultcheck > 0){
                    header("Location: ../signup.php?signup=usertaken");
                exit();
                }else{
                    //Hash password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert user into the database
                    $sql = "INSERT INTO users (user_name, user_email, user_pwd) values ('$userName', '$email', '$password');";
                    $mysqli_query($connect, $sql);
                    header("Location; ../signup.php?signup=success");
                exit();
                }
            }
        }
    }

}else{
    header("Location: ../signup.php");
}