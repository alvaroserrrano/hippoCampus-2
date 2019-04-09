<?php
    require("login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<main>
    <div class="section-wrapper">
        <section class="section-default">
            <h1>Signup</h1>

            <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class = "signupError">Fill in all fields</p>';
                }else if ($_GET['error'] == "invalidusername"){
                    echo '<p class = "signupError">Invalid user name. Choose another one</p>';
                }else if ($_GET['error'] == "invalidemail"){
                    echo '<p class = "signupError">Invalid email. Choose another one</p>';
                }else if ($_GET['error'] == "passwordnotmatch"){
                    echo '<p class = "signupError">Passwords do not match</p>';
                }else if ($_GET['error'] == "sqlerror"){
                    echo '<p class = "signupError">There is an error in the database</p>';
                }else if ($_GET['error'] == "usernametaken"){
                    echo '<p class = "signupError">User name already taken. Choose another one</p>';
                }else if ($_GET['signup'] == "success"){
                    echo '<p class = "signupSuccess">Succesful signup!</p>';
                }
            }
            ?>
            <form action="./includes/signup.inc.php" method="post">
                <input type="text" name="username" id="" placeholder=" Enter username">
                <input type="password" name="password" id="" placeholder= "Enter password">
                <input type="password" name="passwordRepeat" id="" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Signup</button>
        </form>
        </section>
    </div>
</main>
</body>
</html>

<!-- <?php
    require("footer.php");
?> -->
