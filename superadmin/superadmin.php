<?php
include "../db_connect.php";
session_start();
if (isset($_SESSION['username']) && $_SESSION['userlevel'] === "superadmin") {
    $user = $_SESSION['username'];

    if (!isset($user)) {
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
        <link rel="stylesheet" href="../styles//style.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.0/af-2.7.0/b-3.0.0/b-colvis-3.0.0/b-html5-3.0.0/b-print-3.0.0/cr-2.0.0/date-1.5.2/fc-5.0.0/fh-4.0.0/kt-2.12.0/r-3.0.0/rg-1.5.0/rr-1.5.0/sc-2.4.0/sb-1.7.0/sp-2.3.0/sl-2.0.0/sr-1.4.0/datatables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.dataTables.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
        <title>Home | Valenzuela</title>
    </head>

    <body>
        <header class="container-fluid">
            <nav>
                <div class="row custom-row">
                    <div class="col-md-2 p-3 custom-img">
                        <img src="../assets/Valenzuela_Seal.png" class="custom__image img-fluid mx-auto" alt="Sparkle Character">
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
                    <?php
                    include("../layout/side-nav.php");
                    ?>
                </aside>

                <!-- Sidebar collapse -->
                <!-- <div class="sidebar-collapse collapser d-md-none">
                    <div class="main-ul-cont">
                        <div class="sidebar-exit">
                            <button class="btn exit-toggler">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="24" width="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>

                            </button>
                        </div>
                        
                    </div>
                </div> -->

                <!-- Main Component -->
                <div class="main">
                    <nav class="navbar d-flex justify-content-end navbar-expand-md px-3 border-bottom border-top d-md-none">
                        <!-- Button for sidebar toggle -->
                        <button class="btn toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    <div class="offcanvas offcanvas-end" tabindex="-11" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <?php
                            include("../layout/side-nav.php");
                            ?>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="home-tab">
                            <main class="content px-3 py-2">
                                <div class="row">
                                    <div class="container">
                                        <div class="col-sm col-md col-lg">
                                            <div class="d-flex justify-content-end grid mb-3 gap-2 align-items-center">
                                                <label for="min-date">From:</label>
                                                <input type="date" class="form-control filter-input" id="min-date">
                                                <label for="max-date">To:</label>
                                                <input type="date" class="form-control filter-input" id="max-date">
                                            </div>
                                            <div class="">
                                                <table class="table table-bordered nowrap" style="width: 100%;" id="list-agenda">
                                                    <thead>
                                                        <th>No</th>
                                                        <th>Title</th>
                                                        <th>Author</th>
                                                        <th>Date</th>
                                                        <th class="last-child">Action</th>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        $iteration_query = "SELECT * FROM `e-agenda`";
                                                        $result = $sqlcon->query($iteration_query);

                                                        while ($rows = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $rows['agenda_no']; ?></td>
                                                                <td><?= $rows['title']; ?></td>
                                                                <td><?= $rows['author']; ?></td>
                                                                <td><?= $rows['date']; ?></td>
                                                                <td>
                                                                    <a href="<?= $rows['filepath'] ?>" target="_blank" class="btn btn-primary">Download</a>
                                                                    <a data-bs-toggle="modal" data-bs-target="#confirmation" class="btn btn-danger">Delete</a>
                                                                </td>
                                                            </tr>

                                                            <!-- Confirmation Modal -->
                                                            <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure you want to delete?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <a href="delete.php?target_id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End of Modal -->

                                                        <?php  } ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
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


                        <div class="tab-pane fade" id="list-agenda" role="tabpanel" aria-labelledby="list-agenda-list">
                            <main class="content px-3 py-2">
                                <section>
                                    <div class="container-fluid">
                                        <h1 class="mt-4">Agenda</h1>

                                        <div class="table-responsive">
                                            <table class="table table-dark table-sm">
                                                <thead>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date</th>
                                                    <th class="last-child">Action</th>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                    </div>
                </div>

                <!-- Modal for Adding Agenda -->

                <div class="modal fade" id="addAgenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add E-Agenda</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="upload.php" enctype="multipart/form-data" autocomplete="off">
                                    <div class="mb-2">
                                        <label for="recipient-name" class="col-form-label">No.</label>
                                        <input type="text" class="form-control" name="no" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="recipient-name" class="col-form-label">Title</label>
                                        <textarea class="form-control" id="message-text" name="title"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label for="message-text" class="col-form-label">Author</label>
                                        <input type="text" class="form-control" name="author" id="auth">
                                    </div>
                                    <div class="mb-2">
                                        <label for="message-text" class="col-form-label">Date</label>
                                        <input type="date" class="form-control" name="date" id="auth">
                                    </div>
                                    <div class="mb-2">
                                        <label for="message-text" class="col-form-label">PDF Upload</label>
                                        <input type="file" class="form-control" name="pdf" id="auth">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary">Send message</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal -->
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../scripts/side-nav.js"></script>
        <script src="../scripts/mobile-nav.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <!-- DataTables Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.0/af-2.7.0/b-3.0.0/b-colvis-3.0.0/b-html5-3.0.0/b-print-3.0.0/cr-2.0.0/date-1.5.2/fc-5.0.0/fh-4.0.0/kt-2.12.0/r-3.0.0/rg-1.5.0/rr-1.5.0/sc-2.4.0/sb-1.7.0/sp-2.3.0/sl-2.0.0/sr-1.4.0/datatables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
        <script src=""></script>
        <script src=""></script>
        <script src="../scripts/datatables.js"></script>

    </body>

    </html>
<?php

} else {
    header("Location: login.php");
    exit();
}
?>