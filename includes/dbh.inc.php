
<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "loginsystem";



$connect = mysqli_connect($serverName, $userName, $password, $dbName);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
