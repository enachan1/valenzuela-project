<?php
include __DIR__ . "../../../db_connect.php";

if (isset($_GET['target_id']) && isset($_GET['cat'])) {


    if ($_GET['cat'] == "author") {
        $delete_id = mysqli_real_escape_string($sqlcon, $_GET['target_id']);

        $delete_query = "DELETE FROM `setting_author` WHERE `id`= $delete_id";
        $delete_result = $sqlcon->query($delete_query);

        if ($delete_result) {
            header("Location: /valenzuela-project/superadmin/superadmin.php?success=Deleted");
            exit();
        } else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is an error");
            exit();
        }
    }
    else if ($_GET['cat'] == "category") {
        $delete_id = mysqli_real_escape_string($sqlcon, $_GET['target_id']);

        $delete_query = "DELETE FROM `setting_category` WHERE `id`= $delete_id";
        $delete_result = $sqlcon->query($delete_query);

        if ($delete_result) {
            header("Location: /valenzuela-project/superadmin/superadmin.php?success=Deleted");
            exit();
        } else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?error=There is an error");
            exit();
        }
    }
}
