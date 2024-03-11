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
                                <a class="active list-group-item list-group-item-action bs-light" href="#list-home" role="tab" aria-controls="list-home" data-bs-toggle="tab">
                                    <i class="fas fa-home pe-2"></i> Home
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#recordsSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                                    <i class="fas fa-clipboard-user pe-2"></i> Records
                                </a>
                                <div class="collapse" id="recordsSubmenu">
                                    <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 1</a>
                                    <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 2</a>
                                </div>
                            </li>
                            <li class="sidebar-item">
                                <a href="#adminSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                                    <i class="fas fa-user-alt pe-2"></i> Admin
                                </a>
                                <div class="collapse" id="adminSubmenu">
                                    <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 1</a>
                                    <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 2</a>
                                </div>
                            </li>
                            <li class="sidebar-item">
                                <a href="#journalSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">
                                    <i class="fas fa-journal-whills pe-2"></i> Minutes and Journals
                                </a>
                                <div class="collapse" id="journalSubmenu">
                                    <a href="#journalSubSubmenu1" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">Sub Journal 1</a>
                                    <div class="collapse" id="journalSubSubmenu1">
                                        <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 1</a>
                                        <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 2</a>
                                    </div>
                                </div>
                                <div class="collapse" id="journalSubmenu2">
                                    <a href="#journalSubSubmenu2" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">Sub Journal 2</a>
                                    <div class="collapse" id="journalSubSubmenu2">
                                        <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 1</a>
                                        <a href="#" class="list-group-item list-group-item-action bs-light">Subitem 2</a>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-item">
                                <a class="list-group-item list-group-item-action bs-light" href="#list-settings" role="tab" aria-controls="list-settings" data-bs-toggle="tab">
                                    <i class="fas fa-cog pe-2"></i> Setting
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </aside>

        <!-- Offcanvas menu -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasSidebarLabel">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" style="color: var(--color_Dark);"><?= $user ?></a>

                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="../logout.php" style="color: var(--color_Dark)">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
                <div class="offcanvas-body">
                    <!-- Offcanvas Navigation -->
                    <ul class="navbar-nav justify-content flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#list-home" role="tab" aria-controls="list-home">
                                <i class="fas fa-home pe-2"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#recordsSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                                <i class="fas fa-clipboard-user pe-2"></i> Records <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="collapse" id="recordsSubmenu">
                                <a class="nav-link" href="#">Subitem 1</a>
                                <a class="nav-link" href="#">Subitem 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#adminSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                                <i class="fas fa-user-alt pe-2"></i> Admin <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="collapse" id="adminSubmenu">
                                <a class="nav-link" href="#">Subitem 1</a>
                                <a class="nav-link" href="#">Subitem 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#journalSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                               <i class="fas fa-journal-whills pe-2"></i> Minutes and Journals <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="collapse" id="journalSubmenu">
                                <a class="nav-link" href="#journalSubSubmenu1" data-bs-toggle="collapse" aria-expanded="false">Sub Journal 1 <i class="fas fa-caret-down"></i></a>
                                <div class="collapse" id="journalSubSubmenu1">
                                    <a class="nav-link" href="#">Subitem 1</a>
                                    <a class="nav-link" href="#">Subitem 2</a>
                                </div>
                            </div>
                            <div class="collapse" id="journalSubmenu">
                                <a class="nav-link" href="#journalSubSubmenu2" data-bs-toggle="collapse" aria-expanded="false">Sub Journal 2 <i class="fas fa-caret-down"></i></a>
                                <div class="collapse" id="journalSubSubmenu2">
                                    <a class="nav-link" href="#">Subitem 1</a>
                                    <a class="nav-link" href="#">Subitem 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#list-settings" role="tab" aria-controls="list-settings" data-bs-toggle="tab">
                                <i class="fas fa-cog pe-2"></i> Setting
                            </a>
                        </li>
                    </ul>
                </div>
        </div>

        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand-md px-3 border-bottom border-top d-md-none">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                        <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
    
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <main class="content px-3 py-2">
                        <div class="container-fluid">
                            <h1 class="mt-4">Home Page</h1>
                            <p>This is the main content area.</p>
                        </div>
                    </main>
                </div>
    
                <div class="tab-pane fade show" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
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

</body>

</html>
<?php 

}
else {
    header("Location: login.php");
    exit();
}
?>