<?php 
include "db_connect.php";


$user = $_POST["user"];
$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
$usertype = $_POST["usertype"];


$sql_query = "INSERT INTO `users`(`username`, `password`, `user_type`) VALUES ('$user', '$pass', '$usertype')";

$sqlq = mysqli_query($sqlcon, $sql_query);

if($sqlq) {
    echo "inserted";
}
else {
    echo "failed";
}


?>