$serverName = 'localhost';
$userName = 'alvaro';
$password = 'Aserrano1';


$connect = mysqli_connect($serverName, $userName, $password);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
