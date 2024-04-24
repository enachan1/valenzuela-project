<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../db_connect.php";


if (isset($_POST)) {
    $title = mysqli_real_escape_string($sqlcon, $_POST['title']);
    $category = mysqli_real_escape_string($sqlcon, $_POST['category']);
    $date = mysqli_real_escape_string($sqlcon, $_POST['date']);

    //for file uploading
    $targetPath = "../uploads/incoming/";
    $fileName = basename($_FILES['incoming-pdf']['name']);
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileSize = $_FILES['incoming-pdf']['size'];
    $conv_filesize = round($fileSize / 1024, 2);
    $limit_fileSize = round(350345678 / 1024, 2);
    $filePath = $targetPath . $fileName;
    $fileTypes = array("pdf", "docx");


    if (!file_exists($targetPath)) {
        echo "not existing";
        if (mkdir("../uploads/incoming")) {
            if ($conv_filesize < $limit_fileSize) {
                if (in_array($fileExt, $fileTypes)) {
                    if (move_uploaded_file($_FILES['incoming-pdf']['tmp_name'], $filePath)) {
                        insertItem($title, $category, $date, $fileName, $filePath);
                    } else {
                        header("Location: /valenzuela-project/superadmin/superadmin.php?fail=An error occurred");
                        exit();
                    }
                } else {
                    header("Location: /valenzuela-project/superadmin/superadmin.php?fail=Unsupported File Format");
                    exit();
                }
            } else {
                header("Location: /valenzuela-project/superadmin/superadmin.php?fail=File is too big");
                exit();
            }
        }
    } else {
        if ($conv_filesize < $limit_fileSize) {
            if (in_array($fileExt, $fileTypes)) {
                if (move_uploaded_file($_FILES['incoming-pdf']['tmp_name'], $filePath)) {
                    insertItem($title, $category, $date, $fileName, $filePath);
                } else {
                    header("Location: /valenzuela-project/superadmin/superadmin.php?fail=An error occurred");
                    exit();
                }
            } else {
                header("Location: /valenzuela-project/superadmin/superadmin.php?fail=Unsupported File Format");
                exit();
            }
        } else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?fail=File is too big");
            exit();
        }
    }
} else {
    header("Location: /valenzuela-project/superadmin/superadmin.php?fail=Error");
}



function insertItem($title, $category, $date, $fileName, $filePath)
{
    include __DIR__ . "../../db_connect.php";

    $chk_duplicate = "SELECT * FROM `incoming` WHERE `filename` = '$fileName' AND `filePath` = '$filePath'";
    $chk_result = $sqlcon->query($chk_duplicate);

    if (!mysqli_num_rows($chk_result) > 0) {
        $insert_query = "INSERT INTO `incoming`(`title`, `category`, `date`, `filename`, `filepath`)
        VALUES ('$title', '$category', '$date', '$fileName','$filePath')";
        $sqliquery = $sqlcon->query($insert_query);

        if ($sqliquery) {
            header("Location: /valenzuela-project/superadmin/superadmin.php?success=Upload Success");
            exit();
        } else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?fail=Upload Error");
            exit();
        }
    } else {
        header("Location: /valenzuela-project/superadmin/superadmin.php?fail=File Exist");
        exit();
    }
}
