<?php
include "../db_connect.php";


if (isset($_POST['a_username']) || isset($_POST['user_type'])) {
    $username = mysqli_real_escape_string($sqlcon, $_POST['a_username']);
    $usertype = mysqli_real_escape_string($sqlcon, $_POST['user_type']);
    $password = password_hash(mysqli_real_escape_string($sqlcon, $_POST['password']), PASSWORD_DEFAULT);


    if (!empty($username) || !empty($password)) {
        if ($_POST['password'] == $_POST['conf_pass']) {
            addAccount($username, $usertype, $password);
        } else {
            header("Location: valenzuela-project/superadmin/superadmin.php?fail=Password is not the same");
            exit();
        }
    } else {
        header("Location: valenzuela-project/superadmin/superadmin.php?fail=Empty Fields");
        exit();
    }
} else {
    header("Location: valenzuela-project/superadmin/superadmin.php?fail=Something is missing in the required fields");
    exit();
}


function addAccount($user_name, $user_type, $pass_word)
{
    include "../db_connect.php";

    //checking if there are the same username

    $check_query = "SELECT COUNT(*) as userNum FROM `users` WHERE username = '$user_name'";
    $check_result = $sqlcon->query($check_query);

    $numbers = mysqli_fetch_array($check_result);


    if ($numbers['userNum'] >= 1) {
        header("Location: /valenzuela-project/superadmin/superadmin.php?fail=Exisiting Username");
        exit();
    } else {
        //user account insert
        $insertQuery = "INSERT INTO `users`(`username`, `password`, `user_type`) VALUES ('$user_name', '$pass_word', $user_type)";
        $insert_result = $sqlcon->query($insertQuery);

        if ($insert_result) {
            header("Location: /valenzuela-project/superadmin/superadmin.php?Success=Added User Successfully");
            exit();
        }
    }
}

?>
