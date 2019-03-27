<?php
    session_start();
    include './includes/dbh.inc.php';   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="form.css">
    <!-- <link rel="stylesheet" href="css/test.css"> -->
</head>
<body>
    <header>
        <!-- <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="test.html">Home</a></li>
                <li class="navigation__item"><a href="landmark2.html">Landmakr</a></li>
                <li class="navigation__item"><a href="bambi2.html">Bambi</a></li>
                <li class="navigation__item"><a href="budget.html">Finance</a></li>
                <li class="navigation__item"><a href="testing.html">Developers</a></li>
            </ul>
        </nav> -->

        <div class="box">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post">
                <!-- <input type="text" name="uid" id="" placeholder=" Enter user ID"> -->
                <div class="inputBox">
                    <input type="text" name="mailuid" id="" class="form__input" required="">
                    <label for="mailuid" class="form__label">Email</label>
                </div>

                <div class="inputBox">
                    <input type="password" name="pwd" id="" class="form__input" required="">
                    <label for="pwd" class="form__label">Password</label>
                </div>
                <!-- <input type="text" name="pwdRepeat" id="" placeholder="Repeat password"> -->
                <input type="submit" name="login-submit" value="login">
            </form>

            <p id="signupQuest">Don´t have an account?</p>
            <button class="btn-text"><a href="signup.php">Sign up</a></button>
            
            <form action="includes/logout.inc.php" method="post">
                <input type="submit" value="logout" name="logout-submit">
            </form>
        </div>
    </header>
</body>
</html>
