<?php
include __DIR__ . "../../../db_connect.php";
if (isset($_POST['author-name'])) {

    $author_name = mysqli_real_escape_string($sqlcon, $_POST['author-name']);

    if (empty($author_name)) {
        header("Location: /valenzuela-project/superadmin/superadmin.php?fail=This cannot be empty");
        exit();
    } else {
        $chk_query = "SELECT * FROM `setting_author` WHERE `author_name` = '$author_name'";
        $chk_result = $sqlcon->query($chk_query);

        if ($chk_result) {
            if (mysqli_num_rows($chk_result) <= 0) {
                $insert = "INSERT INTO `setting_author` (`author_name`) VALUES ('$author_name')";
                $insert_result = $sqlcon->query($insert);

                if ($insert_result) {
                    header("Location: /valenzuela-project/superadmin/superadmin.php?success=Added Successfully");
                    exit();
                } else {
                    header("Location: /valenzuela-project/superadmin.php?fail=something went wrong");
                    exit();
                }
            } else {
                header("Location: /valenzuela-project/superadmin/superadmin.php?fail=something went wrong");
                exit();
            }
        } else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?fail=something went wrong");
            exit();
        }
    }
} else {
    header("Location: /valenzuela-project/superadmin/superadmin.php?fail=something went wrong");
    exit();
}
