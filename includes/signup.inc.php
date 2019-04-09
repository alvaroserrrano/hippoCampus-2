<?php
if(isset($_POST['signup-submit'])){
    
    require 'database_connection.php';
    // $userName = mysqli_real_scape_string($connect, $_POST['uid']);
    // $email = mysqli_real_scape_string($connect, $_POST['mailuid']);
    // $password = mysqli_reali_scape_string($connect, $_POST['pwd']);
    // $passwordRepeat = mysqli_real_scape_string($connect, $_POST['pwdRepeat']);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    //Check if any field is empty
    if (empty($username) || empty($password) || empty($passwordRepeat) ) {
        header("Location: ../signup.php?error=emptyfields&username=".$username);
    exit();
    }else{
        //Check if userName is valid
        if(!preg_match("/^[a-zA-Z]*$/", $username)){
            header("Location: ../signup.php?error=invalidusername");
            exit();    
        }else{
            if($password !== $passwordRepeat){
                header("Location: ../signup.php?error=passwordnotmatch&username=".$username);
            }else{
                $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
                //CREATE A PREPARED STATEMENT
                $stmt = mysqli_stmt_init($connect);
                //PREPARE THE PREPARED STATEMENT
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror");
                exit();
                }else{
                    //BIND PARAMETERS TO THE PLACEHOLDER
                    mysqli_stmt_bind_param($stmt, "s", $userName);
                    //RUN PARAMETERS INSIDE THE DATABASE
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultcheck = mysqli_num_rows($stmt);
                    if($resultcheck > 0){
                        header("Location: ../signup.php?error=usertaken&email=".$email);
                        exit();
                    }else{
                        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                        //CREATE PREPARED STATEMENT
                        $stmt = mysqli_stmt_init($connect);
                        //PREPARE THE PREPARED STATEMENT
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("Location: ../signup.php?error=sqlerror");
                            exit();
                        }else{
                            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                            //BIND PARAMETERS IN PLACEHOLDER
                            mysqli_stmt_bind_param($stmt, "sss", $userName, $email, $hashedPassword);
                            //RUN PARAMETERS INSIDE THE DATABASE
                            mysqli_stmt_execute($stmt);
                            //Maybe take user to login page?????????
                            header("Location: ../main.php?signup=success");
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
    //NOT NECESSARY
    myslqi_stmt_close($stmt);
    mysqli_close($connect);
}else{
    header("Location: ../signup.php");
    exit();
}
