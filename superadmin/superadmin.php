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
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../styles/superadmin.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <title>Home | Valenzuela</title>
</head>

<body>
<header class="container-fluid">
        <nav>
            <div class="row custom-row">
                <div class="col-md-2 p-3 custom-img">
                    <img src="../assets/Valenzuela_Seal.png" class="custom__image img-fluid" alt="Sparkle Character">
                </div>

                <div class="col-md-10 p-3 custom-flex">
                    <div class="d-flex mt-3 flex-column text-center">
                        <h1 class="text-center row__h1">Valenzuela 9th City Council</h1>
                    </div>
                </div>
            </div>
        </nav>
</header>
<main>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="list-group" id="list-tab" role="tablist">
                <div class="h-100">
                    <div class="sidebar-logo d-flex justify-content-between">
                        <a class="d-flex justify-content-center align-items-center"><?= $user ?></a>
                        <span>
                            <a class="btn" href="../logout.php">
                                <svg style="display: inline-block;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>
                            </a>
                        </span>
                    </div>
                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li class="sidebar-item">
                                <a class="active list-group-item list-group-item-action bs-light tabShow" id="home-tab" href="#list-home" role="tab" aria-controls="list-home" data-bs-toggle="tab">
                                    <i class="fas fa-home pe-2"></i> Home
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#recordsSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                                    <i class="fas fa-clipboard-user pe-2"></i> Records
                                </a>
                                <div class="collapse" id="recordsSubmenu">
                                    <a href="#subitem1" class="list-group-item list-group-item-action bs-light tabShow" id="subitem1-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Subitem 1</a>
                                    <a href="#subitem2" class="list-group-item list-group-item-action bs-light tabShow" id="subitem2-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Subitem 2</a>
                                </div>
                            </li>
                            <li class="sidebar-item">
                                <a href="#adminSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                                    <i class="fas fa-user-alt pe-2"></i> Admin
                                </a>
                                <div class="collapse" id="adminSubmenu">
                                    <a href="#subitem1" class="list-group-item list-group-item-action bs-light tabShow" id="subitem1-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Subitem 1</a>
                                    <a href="#subitem2" class="list-group-item list-group-item-action bs-light tabShow" id="subitem2-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem2">Subitem 2</a>
                                </div>
                            </li>
                            <li class="sidebar-item">
                                <a href="#journalSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">
                                    <i class="fas fa-journal-whills pe-2"></i> Minutes and Journals
                                </a>
                                <div class="collapse" id="journalSubmenu">
                                    <a href="#journalSubSubmenu1" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">Sub Journal 1</a>
                                    <div class="collapse" id="journalSubSubmenu1">
                                        <a href="#subitem1" class="list-group-item list-group-item-action bs-light tabShow" id="subitem1-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Subitem 1</a>
                                        <a href="#subitem2" class="list-group-item list-group-item-action bs-light tabShow" id="subitem2-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Subitem 2</a>
                                    </div>
                                </div>
                                <div class="collapse" id="journalSubmenu2">
                                    <a href="#journalSubSubmenu2" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">Sub Journal 2</a>
                                    <div class="collapse" id="journalSubSubmenu2">
                                        <a href="#1" class="list-group-item list-group-item-action bs-light tabShow">Subitem 1</a>
                                        <a href="#2" class="list-group-item list-group-item-action bs-light tabShow">Subitem 2</a>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-item">
                                <a class="list-group-item list-group-item-action bs-light tabShow" id="settings-tab" href="#list-settings" role="tab" aria-controls="list-settings" data-bs-toggle="tab">
                                    <i class="fas fa-cog pe-2"></i> Setting
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </aside>

       <!-- Sidebar collapse -->
       <div class="sidebar-collapse collapser d-md-none">
        <div class="main-ul-cont">
        <div class="sidebar-exit">
            <button class="btn exit-toggler">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="24" width="24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>

            </button>
        </div>
            <ul class="sidebar-main-ul">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Records</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Admin</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Minutes and Journal</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Settings</a>
                </li>
            </ul>
        </div>
        <div class="user-ul-cont">
            <ul class="sidebar-ul-user">
                <li>This is USer</li>
            </ul>
        </div>
       </div>

        <!-- Main Component -->
        <div class="main">
            <nav class="navbar d-flex justify-content-end navbar-expand-md px-3 border-bottom border-top d-md-none">
                <!-- Button for sidebar toggle -->
                <button class="btn toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
    
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="home-tab">
                    <main class="content px-3 py-2">
                        <div class="container-fluid">
                            <h1 class="mt-4">Home Page</h1>
                            <p>This is the main content area.</p>
                        </div>
                    </main>
                </div>

                <div class="tab-pane fade show" id="subitem1" role="tabpanel" aria-labelledby="subitem1-tab">
                    <main class="content px-3 py-2">
                        <div class="container-fluid">
                            <h1 class="mt-4">Subitem 1</h1>
                            <p>This is the main content area.</p>
                        </div>
                    </main>
                </div>

                <div class="tab-pane fade show" id="subitem2" role="tabpanel" aria-labelledby="subitem2-tab">
                    <main class="content px-3 py-2">
                        <div class="container-fluid">
                            <h1 class="mt-4">Subitem 2</h1>
                            <p>This is the main content area.</p>
                        </div>
                    </main>
                </div>
    
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="settings-tab">
                    <main class="content px-3 py-2">
                        <div class="container-fluid">
                            <h1 class="mt-4">Settings</h1>
                            <p>This is the main content area.</p>
                        </div>
                    </main>
                </div>
            </div>
        </div>

    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../scripts/side-nav.js"></script>
<script src="../scripts/mobile-nav.js"></script>

</body>

</html>
<?php 

}
else {
    header("Location: login.php");
    exit();
}
?>