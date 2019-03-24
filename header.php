<?php
    session_start();
    include '/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img src="images/logo.jpeg" alt="logohip">
            </a>
            <ul>
                <li>Home</li>
                <li>Bambi</li>
                <li>Landmark</li>
                <li>Finance</li>
                <li>Developers</li>
            </ul>
            <div>
                <form action="includes/login.inc.php" method="post" class="form">
                    <!-- <input type="text" name="uid" id="" placeholder=" Enter user ID"> -->
                    <div class="form__group">
                        <input type="text" name="mailuid" id="" placeholder = "username/email" class="form__input">
                        <label for="mailuid" class="form__label"></label>
                    </div>

                    <div class="form__group">
                        <input type="text" name="pwd" id="" placeholder = "password" class="form__input">
                        <label for="pwf" class="form__label"></label>
                    </div>
                    <!-- <input type="text" name="pwdRepeat" id="" placeholder="Repeat password"> -->
                    <button type="submit" name="login-submit" class="btn-text">Login</button>
                </form>

                <button class="btn-text"><a href="signup.php"></a></button>
                
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="btn-text">Logout</button>
                </form>
            </div>
        </nav>
    </header>
</body>
</html>
