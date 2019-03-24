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
    <!-- <link rel="stylesheet" href="css/test.css"> -->
</head>
<body>
    <header>
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="test.html">Home</a></li>
                <li class="navigation__item"><a href="landmark2.html">Landmakr</a></li>
                <li class="navigation__item"><a href="bambi2.html">Bambi</a></li>
                <li class="navigation__item"><a href="budget.html">Finance</a></li>
                <li class="navigation__item"><a href="testing.html">Developers</a></li>
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
