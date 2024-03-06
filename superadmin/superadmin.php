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
                            <div class="actives">
                                <a class="sidebar-link active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">
                                <i class="fas fa-home pe-2"></i>
                                Home
                                </a>
                            </div>
                        </li>
                        <li class="sidebar-item">
                            <div class="actives">
                                <a href="#" class="sidebar-link collapser collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                                    aria-expanded="false" aria-controls="pages">
                                    <i class="fas fa-clipboard-user pe-2"></i>
                                    Records
                                </a>
                            </div>
                            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="test">
                                    <div class="drop">
                                        <a href="#" class="sidebar-link">Blank</a>
                                        <a href="#" class="sidebar-link">Blank</a>
                                        <a href="#" class="sidebar-link">Blank</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <div class="actives">
                                <a href="#" class="sidebar-link collapser collapsed" data-bs-toggle="collapse" data-bs-target="#auth"
                                    aria-expanded="false" aria-controls="auth">
                                    <i class="fas fa-user-alt pe-2"></i>
                                    Admin
                                </a>
                            </div>
                            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="test">
                                    <div class="drop">
                                        <a href="#" class="sidebar-link">Blank</a>
                                        <a href="#" class="sidebar-link">Blank</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <div class="actives">
                                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi"
                                    aria-expanded="false" aria-controls="multi">
                                    <i class="fas fa-journal-whills pe-2"></i>
                                    Minutes and Journals
                                </a>
                            </div>
                            <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <div class="duactive">
                                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                            Two Links
                                        </a>
                                    </div>
                                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                        <li class="test">
                                            <div class="drop">
                                                <a href="#" class="sidebar-link">Link 1</a>
                                                <a href="#" class="sidebar-link">Link 2</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="duactive">
                                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#multi-tree" aria-expanded="false" aria-controls="multi-tree">
                                            Three Links
                                        </a>
                                    </div>
                                    <ul id="multi-tree" class="sidebar-dropdown list-unstyled collapse">
                                        <li class="test">
                                            <div class="drop">
                                                <a href="#" class="sidebar-link">Link 1</a>
                                                <a href="#" class="sidebar-link">Link 2</a>
                                                <a href="#" class="sidebar-link">Link 3</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <div class="actives">
                            <a class="sidebar-link" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">
                                <i class="fas fa-cog pe-2"></i>
                                Setting
                            </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand-md px-3 border-bottom border-top">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
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