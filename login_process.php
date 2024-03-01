<?php 
include "db_connect.php";
session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($sqlcon, $_POST['username']);
    $password = $_POST['password'];
    $hashed_pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if(empty($username) && empty($password)) {
        header("Location: login.php?err=empty field");
        exit();
    }
    else {
        // echo $hashed_pwd;
        $sql_username = "SELECT * FROM `users` WHERE `username` = '$username'";
        $sqlconq = mysqli_query($sqlcon, $sql_username);

        if(mysqli_num_rows($sqlconq) === 1) {
            $fetch = mysqli_fetch_assoc($sqlconq);
            $un = $fetch['username'];
            $pass_from_db = $fetch['password'];
            $usertype = $fetch['user_type'];

            if($_POST['username'] === $fetch['username'] && password_verify($password, $pass_from_db)) {
                $_SESSION['username'] = $fetch['username'];
                $_SESSION['userlevel'] = $fetch['user_type'];
                if(isset($_SESSION['username']) && $_SESSION['userlevel'] === "superadmin") {
                    header("Location: /valenzuela-project/superadmin/superadmin.php");
                    exit();
                }
                else {
                    header("Location: login.php?err=log in error");
                    exit();
                }
            }
            else {
                header("Location: login.php?suc=pail from ussername");
                exit();
            }
        }
        else {
            header("Location: login.php?suc=pail");
            exit();
        }
    }
}
else {
    header("Location: login.php?err=empty field");
    exit();
}




?>