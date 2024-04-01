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
                <?php
                include("../layout/header.php");
                ?>
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
                                        <!-- Pane Description -->
                                        <div class="p-2 mb-3 mt-3">
                                            <h1 class="h1">Home</h1>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>

                        <div class="tab-pane fade show" id="agenda" role="tabpanel" aria-labelledby="subitem1-tab">
                            <main class="content px-3 py-2">
                                <div class="row">
                                    <div class="container">
                                        <h1 class="p-2 mb-3 mt-3">E-Agenda</h1>
                                    </div>
                                    <?php
                                    include("../layout/e-agenda.php");
                                    ?>
                                </div>
                            </main>
                        </div>

                        <div class="tab-pane fade show" id="incoming" role="tabpanel" aria-labelledby="subitem2-tab">
                            <main class="content px-3 py-2">
                                <div class="container-fluid">
                                    <h1 class="mt-4">Subitem 2</h1>
                                    <p>This is the main content area.</p>
                                </div>
                            </main>
                        </div>

                        <div class="tab-pane fade" id="outgoing" role="tabpanel" aria-labelledby="outgoing-tab">
                            <main class="content px-3 py-2">
                                <div class="container-fluid">
                                    <h1 class="mt-4">Outgoing</h1>
                                    <p>This is the main content area.</p>
                                </div>
                            </main>
                        </div>

                        <div class="tab-pane fade" id="publication" role="tabpanel" aria-labelledby="publication-tab">
                            <main class="content px-3 py-2">
                                <div class="container-fluid">
                                    <h1 class="mt-4">Publication</h1>
                                    <p>This is the main content area.</p>
                                </div>
                            </main>
                        </div>

                        <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="certification-tab">
                            <main class="content px-3 py-2">
                                <div class="container-fluid">
                                    <h1 class="mt-4">Certification</h1>
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
                                <button class="btn btn-primary">Add Agenda</button>
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
        <script src="../scripts/session-nav.js"></script>

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