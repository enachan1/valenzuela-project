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
    <link rel="stylesheet" href="../styles//superadmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Superadmin</title>
</head>
<body>
<header class="container-fluid  ">
        <nav>
            <div class="row">
                <div class="col-sm col-md p-3 custom-img ">
                    <img src="https://via.placeholder.com/100" class="img-fluid" alt="">
                </div>
                <div class="col-sm col-md-5 p-3 custom-flex">
                    <div class="d-flex mt-3 flex-column text-center">
                        <h1 class="row__h1">Valenzuela 9th City Council</h1>
                        <span>Welcome <strong><?php echo $user; ?></strong> <a href="../logout.php">Log Out</a></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="container-fluid">
            <div class="row mt-5 justify-content-center custom-flex">
                <div class="col-sm col-md col-lg">
                    <div class="section__cont">
                        <a href="#" class="section__a">
                        <img src="https://via.placeholder.com/200" alt="hi" class="img-fluid">
                        <h1>Sample</h1>
                        </a>
                    </div>
                </div>
                <div class="col-sm col-md col-lg">
                    <div class="section__cont">
                        <a href="#" class="section__a">
                        <img src="https://via.placeholder.com/200" alt="hi" class="img-fluid">
                        <h1>Sample</h1>
                        </a>
                    </div>
                </div>
                <div class="col-sm col-md col-lg">
                    <div class="section__cont">
                        <a href="#" class="section__a">
                        <img src="https://via.placeholder.com/200" alt="hi" class="img-fluid">
                        <h1>Sample</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 custom-flex">
            <div class="col-sm col-md">
                    <div class="section__cont">
                        <a href="#" class="section__a">
                        <img src="https://via.placeholder.com/200" alt="hi" class="img-fluid">
                        <h1>Sample</h1>
                        </a>
                    </div>
                </div>
                <div class="col-sm col-md">
                    <div class="section__cont">
                        <a href="#" class="section__a">
                        <img src="https://via.placeholder.com/200" alt="hi" class="img-fluid">
                        <h1>Sample</h1>
                        </a>
                    </div>
                </div>
                <div class="col-sm col-md">
                    <div class="section__cont">
                        <a href="#" class="section__a">
                        <img src="https://via.placeholder.com/200" alt="hi" class="img-fluid">
                        <h1>Sample</h1>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

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