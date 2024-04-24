<?php
include "../db_connect.php";
if (isset($_POST)) {

    $title = mysqli_real_escape_string($sqlcon, $_POST['title']);
    $date = mysqli_real_escape_string($sqlcon, $_POST['date']);

    //for file uploading
    $targetPath = "../uploads/e-agenda/";
    $fileName = basename($_FILES['pdf']['name']);
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileSize = $_FILES['pdf']['size'];
    $conv_filesize = round($fileSize / 1024, 2);
    $limit_fileSize = round(350345678 / 1024, 2);
    $filePath = $targetPath . $fileName;
    $fileTypes = array("pdf", "docx");


    if (!file_exists($targetPath)) {
        if (mkdir("../uploads") && mkdir("../uploads/e-agenda")) {
            if ($conv_filesize < $limit_fileSize) {
                if (in_array($fileExt, $fileTypes)) {
                    if (move_uploaded_file($_FILES['pdf']['tmp_name'], $filePath)) {
                        insertItem($title, $date, $fileName, $filePath);
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
                if (move_uploaded_file($_FILES['pdf']['tmp_name'], $filePath)) {
                    insertItem($title, $date, $fileName, $filePath);
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
    echo "err";
}



function insertItem($title, $date, $fileName, $filePath)
{
    include "../db_connect.php";

    $chk_duplicate = "SELECT * FROM `e-agenda` WHERE `filename` = '$fileName' AND `filePath` = '$filePath'";
    $chk_result = $sqlcon->query($chk_duplicate);

    if (!mysqli_num_rows($chk_result) > 0) {
        $insert_query = "INSERT INTO `e-agenda`(`title`, `date`, `filename`, `filepath`)
        VALUES ('$title', '$date', '$fileName','$filePath')";
        $sqliquery = $sqlcon->query($insert_query);

        if ($sqliquery) {
            header("Location: /valenzuela-project/superadmin/superadmin.php?success=Upload Success");
            exit();
        } else {
            header("Location: /valenzuela-project/superadmin/superadmin.php?fail=Upload Error");
            exit();
        }
    }
    else {
        header("Location: superadmin.php?fail=File Exist");
        exit();
    }
}
