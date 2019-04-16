<?php
if(isset($_POST['signup-submit'])){
    
    require '../database_connection.php';
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
                $sql = "SELECT username FROM login WHERE username=$username";
                $statement = $connect->prepare($sql);
                $statement->execute();
                $count = $statement->rowCount();
                if($count > 0){
                    header("Location: ../signup.php?error=usertaken");
                    exit();
                }else{
                    $sql = "INSERT INTO login (username, password) VALUES ('".$username.", ".$username."')";
                    $statement = $connect->prepare($sql);
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    //BIND PARAMETERS IN PLACEHOLDER
                    // $statement->bindParam('ss', $username, $hashedPassword);
                    $statement->execute();
                    //Maybe take user to login page?????????
                    header("Location: ../main.php?signup=success");
                    exit();
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
}else{
    header("Location: ../signup.php");
    exit();
}
