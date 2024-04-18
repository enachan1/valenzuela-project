<?php
include __DIR__ . "../../db_connect.php";

if (isset($_GET['target_id'])) {
    $delete_id = mysqli_real_escape_string($sqlcon, $_GET['target_id']);

    $delete_query = "DELETE FROM `setting_category` WHERE `id`= $delete_id";
    $delete_result = $sqlcon->query($delete_query);

    if ($delete_result) {
        header("Location: superadmin.php?success=Deleted");
        exit();
    } else {
        header("Location: superadmin.php?error=There is an error");
        exit();
    }
}
