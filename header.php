<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
                <form action="includes/login.inc.php" method="post">
                    <!-- <input type="text" name="uid" id="" placeholder=" Enter user ID"> -->
                    <input type="text" name="mailuid" id="" placeholder = "username/email">
                    <input type="text" name="pwd" id="" placeholder= "Enter password">
                    <!-- <input type="text" name="pwdRepeat" id="" placeholder="Repeat password"> -->
                    <button type="submit">Login</button>
                </form>
                <a href="signup.php"></a>
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>
</body>
</html>