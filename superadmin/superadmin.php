<?php
include "../db_connect.php";
session_start();
if(isset($_SESSION['username']) && $_SESSION['userlevel'] === "superadmin") {
$user = $_SESSION['username'];

    if(!isset($user)) {
        header("Location: /valenzuela-project/login.php");
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
<header class="container-fluid">
        <nav>
            <div class="row">
                <div class="col-sm col-md p-3 custom-img">
                    <img src="../assets/Valenzuela_Seal.png" class="custom__image img-fluid" alt="">
                </div>
                <div class="col-sm col-md-5 p-3 custom-flex">
                    <div class="d-flex mt-3 flex-column text-center">
                        <h1 class="row__h1">Valenzuela 9th City Council</h1>
                        <span>Welcome <strong><?php echo $user; ?></strong> <a href="../logout.php" title="Log Out">
                            <svg style="display: inline-block;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>
                        </a></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="container-fluid mt-5">
            <div class="row">
                <div class="col-xs-12 show_btn hide__navBtn">
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                        </svg>
                    </button>
                </div>
            <div class="col-lg-3 col-md-4 col-xl-2 ctm-sz isnav__hide">
                <ul class="nav flex-column pt-3 pb-3 ctm-sz">
                    <li class="nav-item">
                        <a href="./superadmin.php" class="nav-link p-3">Home</a>
                    </li>
                    <li class="nav-item"><a href="#rec__collapse" class="nav-link p-3" role="button" aria-expanded="false" aria-controls="rec__collapse" data-bs-toggle="collapse">Records</a></li>
                    <div class="collapse ms-5" id="rec__collapse">
                        <a href="./pages/e-agenda.php" class="nav-link p-2">E-Agenda</a>
                        <a href="" class="nav-link p-2">Sample</a>
                        <a href="" class="nav-link p-2">Sample</a>
                    </div>
                    <li class="nav-item"><a href="#" class="nav-link p-3">Admin</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-3">Minutes and Journal</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-3">Settings</a></li>
                </ul>
            </div>
            <div class="col p-5">
                <div class="row flex-column justify-content-center">
                    <div class="col d-flex justify-content-center"><h1>Hello</h1></div>
                    <div class="col d-flex justify-content-center"><img src="https://via.placeholder.com/300" alt=""></div>
                </div>
            </div>
            </div>
        </section>
        <!-- Canvas -->
    <section>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navigation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
                <div class="offcanvas-body">
                    <div>
                    <ul class="nav flex-column pt-3 pb-3 ctm-sz">
                        <li class="nav-item">
                            <a href="./superadmin.php" class="nav-link p-3">Home</a>
                        </li>
                    <li class="nav-item"><a href="#rec__collapse" class="nav-link p-3" role="button" aria-expanded="false" aria-controls="rec__collapse" data-bs-toggle="collapse">Records</a></li>
                    <div class="collapse ms-5" id="rec__collapse">
                        <a href="pages/e-agenda.php" class="nav-link p-2">E-Agenda</a>
                        <a href="" class="nav-link p-2">Sample</a>
                        <a href="" class="nav-link p-2">Sample</a>
                    </div>
                    <li class="nav-item"><a href="#" class="nav-link p-3">Admin</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-3">Minutes and Journal</a></li>
                    <li class="nav-item"><a href="#" class="nav-link p-3">Settings</a></li>
                </ul>
                    </div>
            </div>
        </div>
    </section>
</main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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