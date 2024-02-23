<?php
$username = "root";
$password = "";
$dbname = "valenzuela-test";
$server = "localhost";


$sqlcon = mysqli_connect($server, $username, $password, $dbname);

if(!$sqlcon) {
    die("Connecion Error");
}
// else {
//     header("Location: db_connect.php?nm=connected success");
// }

?>