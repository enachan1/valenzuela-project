<?php
include "../db_connect.php";
session_start();
if(isset($_SESSION['username']) && $_SESSION['userlevel'] === "superadmin") {
$user = $_SESSION['username'];

    if(!isset($user)) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Superadmin</title>
</head>
<body>
<header class="container">
        <nav>
            <div class="header__cont d-flex justify-content-between">
                <img src="https://via.placeholder.com/100" class="header__img" alt="logo ng valenzuela kunwari">
                <div class="d-flex justify-content-center flex-column">
                    <h1 class="h1 mt-3">Coucil Secretariat Records Station</h1>
                    <span class="d-flex flex-row-reverse grid gap-3"><a href="#">Log Out</a> Welcome User</span>
                </div>
        </nav>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
<?php 

}
else {
    header("Location: login.php");
    exit();
}
?>