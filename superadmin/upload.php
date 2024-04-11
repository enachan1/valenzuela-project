<?php
include __DIR__ . "../../db_connect.php";
if (isset($_POST)) {

    $no = mysqli_real_escape_string($sqlcon, $_POST['no']);
    $title = mysqli_real_escape_string($sqlcon, $_POST['title']);
    $author = mysqli_real_escape_string($sqlcon, $_POST['author']);
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
                        insertItem($no, $title, $author, $date, $fileName, $filePath);
                    } else {
                        header("Location: superadmin.php?fail=An error occurred");
                        exit();
                    }
                } else {
                    header("Location: superadmin.php?fail=Unsupported File Format");
                    exit();
                }
            } else {
                header("Location: superadmin.php?fail=File is too big");
                exit();
            }
        }
    } else {
        if ($conv_filesize < $limit_fileSize) {
            if (in_array($fileExt, $fileTypes)) {
                if (move_uploaded_file($_FILES['pdf']['tmp_name'], $filePath)) {
                    insertItem($no, $title, $author, $date, $fileName, $filePath);
                } else {
                    header("Location: superadmin.php?fail=An error occurred");
                    exit();
                }
            } else {
                header("Location: superadmin.php?fail=Unsupported File Format");
                exit();
            }
        } else {
            header("Location: superadmin.php?fail=File is too big");
            exit();
        }
    }
} else {
    echo "err";
}



function insertItem($no, $title, $author, $date, $fileName, $filePath)
{
    include __DIR__ . "../../db_connect.php";

    $chk_duplicate = "SELECT * FROM `e-agenda` WHERE `filename` = '$fileName' AND `filePath` = '$filePath'";
    $chk_result = $sqlcon->query($chk_duplicate);

    if (!mysqli_num_rows($chk_result) > 0) {
        $insert_query = "INSERT INTO `e-agenda`(`agenda_no`, `title`, `author`, `date`, `filename`, `filepath`)
        VALUES ($no, '$title', '$author', '$date', '$fileName','$filePath')";
        $sqliquery = $sqlcon->query($insert_query);

        if ($sqliquery) {
            header("Location: superadmin.php?success=Upload Success");
            exit();
        } else {
            header("Location: superadmin.php?fail=Upload Error");
            exit();
        }
    }
    else {
        header("Location: superadmin.php?fail=File Exist");
        exit();
    }
}
