<?php
if(isset($_POST['signup-submit'])){
    
    require 'dhb.inc.php';
    $userName = mysqli_real_scape_string($connect, $_POST['uid']);
    $email = mysqli_real_scape_string($connect, $_POST['mailuid']);
    $password = mysqli_real_scape_string($connect, $_POST['pwd']);
    $passwordRepeat = mysqli_real_scape_string($connect, $_POST['pwdRepeat']);
    //Check if any field is empty
    if (empty($userName) || empty($email) || empty($password) || empty($passwordRepeat) ) {
        header("Location: ../signup.php?error=emptyfields&username=".$userName."&email=".$email);
    exit();
    }else{
        //Check if userName is valid
        if(!preg_match("/^[a-zA-Z]*$/", $userName)){
            header("Location: ../signup.php?error=invalidusername&email=".$email);
            exit();    
        }else{
            //Check email is valid
            if(!filter_var("$email", FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?error=invalidemail&username=".$userName);
            exit();
            }
            else{
                if($password !== $passwordRepeat){
                    header("Location: ../signup.php?error=passwordfailure&username=".$userName."&email=".$email)
                }else{
                    $sql = "SELECT user_name FROM users WHERE uidUsers=?";
                $stmt = mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror");
                exit();
                }else{
                    mysqli_stmt_bind_param($stmt, "s", $userName);
                    mysqli_stmt_execute($stmt);
                    mysqli_store_results($stmt);
                    $resultcheck = mysqli_num_rows($stmt);
                    if($resultcheck > 0){
                        header("Location: ../signup.php?error=usertaken&email=".$email);
                        exit();
                    }else{
                        $sql = "INSERT INTO users (userNameUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                        $stmt = mysqli_stmt_init($connect);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("Location: ../signup.php?error=sqlerror");
                            exit();
                        }else{
                            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "sss", $userName, $email, $);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../signup.php?signup=success");
                            exit();
                        }
                    }
                }
                // $sql = "SELECT * FROM users WHERE username = '$userName";
                // $result = mysqli_query($connect, $sql);
                // $resultcheck = mysqli_num_rows($results);
                // //Check that userName has already been taken
                // if($resultcheck > 0){
                //     header("Location: ../signup.php?signup=usertaken");
                // exit();
                // }else{
                //     //Hash password
                //     $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //     //Insert user into the database
                //     $sql = "INSERT INTO users (user_name, user_email, user_pwd) values ('$userName', '$email', '$password');";
                //     $mysqli_query($connect, $sql);
                //     header("Location; ../signup.php?signup=success");
                // exit();
                // }
                }    
            }
        }
    }
    myslqi_stmt_close($stmt);
    mysqli_close($connect);
}else{
    header("Location: ../signup.php");
    exit(;
}
