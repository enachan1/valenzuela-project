<?php 
include __DIR__."../../../db_connect.php";
if(isset($_POST)) {

    $no = mysqli_real_escape_string($sqlcon, $_POST['no']);
    $title = mysqli_real_escape_string($sqlcon, $_POST['title']);
    $author = mysqli_real_escape_string($sqlcon, $_POST['author']); 
    $date = mysqli_real_escape_string($sqlcon, $_POST['date']);

    //for file uploading
    $targetPath = "../../uploads/e-agenda/";
    $fileName = basename($_FILES['pdf']['name']);
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileSize = $_FILES['pdf']['size'];
    // $conv_filesize = round($fileSize / 1024, 2);
    // $limit_fileSize = round(209715200 / 1024, 2);
    $filePath = $targetPath.$fileName;
    $fileTypes = array("pdf", "docx");

    if(in_array($fileExt, $fileTypes)) {
            if(move_uploaded_file($_FILES['pdf']['tmp_name'], $filePath)) {
                $insert_query = "INSERT INTO `e-agenda`(`agenda_no`, `title`, `author`, `date`, `filename`, `filepath`)
                    VALUES ($no, '$title', '$author', '$date', '$fileName','$filePath')";
                $sqliquery = $sqlcon->query($insert_query);

                if($sqliquery) {
                    header("Location: e-agenda.php?success=Upload Success");
                    exit();
                }
                else {
                    header("Location: e-agenda.php?fail=Upload Error");
                    exit();
                }
            }
            else {
                header("Location: e-agenda.php?fail=An error occurred");
                exit();
            }
    }
    }
    else {
        echo "err";
    }
?>