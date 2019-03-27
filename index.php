<?php
    require 'header.php';
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
        <div class="wrapper-main">
            <section class="section-default">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<p class="login-status">You are logged in</p>';
                }elseif (isset($_GET['error'])) {
                    if($_GET['error'] == "nouser"){
                        echo '<p>No such user in our database</p>';
                        echo '<br>';
                        echo '<p>Please sign up</p>';
                    }
                }
                else{
                    echo '<p class="login-status">You are logged out</p>';
                }
            ?>
            </section>
        </div>
    </main>
</body>
</html>

    <!-- <?php
    // require 'footer.php';
    ?> -->
