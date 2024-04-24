<?php
include __DIR__ . "../../db_connect.php";

if (isset($_GET['target_id']) && isset($_GET['menu'])) {
    $delete_id = mysqli_real_escape_string($sqlcon, $_GET['target_id']);
    $menu = mysqli_real_escape_string($sqlcon, $_GET['menu']);


    if ($menu == "agenda") {
        //file deletion query getting from the database
        $file_delete = "SELECT `filepath` FROM `e-agenda` WHERE `id` = $delete_id";
        $file_delete_result = $sqlcon->query($file_delete);

        if ($rows = $file_delete_result->fetch_assoc()) {
            $filepath = $rows['filepath'];
            if (unlink($filepath)) {
                $delete_query = "DELETE FROM `e-agenda` WHERE `id`= $delete_id";
                $delete_result = $sqlcon->query($delete_query);

                if ($delete_result) {
                    header("Location: /valenzuela-project/superadmin/superadmin.php?success=Deleted");
                    exit();
                } else {
                    header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is an error");
                    exit();
                }
            } else {
                header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is a problem deleting the file");
                exit();
            }
        } else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is an error");
            exit();
        }
    }

    else if ($menu == "incoming") {
         //file deletion query getting from the database
    $file_delete = "SELECT `filepath` FROM `incoming` WHERE `id` = $delete_id";
    $file_delete_result = $sqlcon->query($file_delete);

    if($rows = $file_delete_result->fetch_assoc()) {
        $filepath = $rows['filepath'];
        if(unlink($filepath)) {
            $delete_query = "DELETE FROM `incoming` WHERE `id`= $delete_id";
            $delete_result = $sqlcon->query($delete_query);

            if($delete_result) {
                header("Location: /valenzuela-project/superadmin/superadmin.php?success=Deleted");
                exit();
            }
            else {
                header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is an error");
                exit();
            }
        }
        else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is a problem deleting the file");
            exit();
        }
    }
    else {
        header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is an error");
        exit();
    }
    }
}
