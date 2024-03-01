<?php
include __DIR__."../../../db_connect.php";
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
    <link rel="stylesheet" href="../../styles//style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- data tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.0/af-2.7.0/b-3.0.0/b-colvis-3.0.0/b-html5-3.0.0/b-print-3.0.0/cr-2.0.0/date-1.5.2/fc-5.0.0/fh-4.0.0/kt-2.12.0/r-3.0.0/rg-1.5.0/rr-1.5.0/sc-2.4.0/sb-1.7.0/sp-2.3.0/sl-2.0.0/sr-1.4.0/datatables.min.css" rel="stylesheet">
    <title>Superadmin</title>
</head>
<body>
<header class="container-fluid border">
        <nav>
            <div class="row">
                <div class="col-sm col-md p-3 custom-img">
                    <img src="https://via.placeholder.com/100" class="img-fluid" alt="">
                </div>
                <div class="col-sm col-md-5 p-3 custom-flex">
                    <div class="d-flex mt-3 flex-column text-center">
                        <h1 class="row__h1">Valenzuela 9th City Council</h1>
                        <span>Welcome <strong><?php echo $user; ?></strong> <a href="../../logout.php">Log Out</a></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    
    <main>
        <div class="container mt-5 p-2">
            <div
                class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <a href="#">Superadmin</a>&nbsp;<span>></span>
                    <a href="#">E-Agenda</a>
                </div>
            </div>
            
        </div>
       <div class="container border p-3 mt-3">
        <div class="row">
            <div class="col-sm col-md col-lg">
                <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                <table class="table table-bordered" id="list-agenda">
                    <thead>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </thead>
                    
                    <tbody>
                        <?php 
                            $iteration_query = "SELECT * FROM `e-agenda`";
                            $result = $sqlcon->query($iteration_query);

                            while($rows = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= $rows['agenda_no']; ?></td>
                                <td><?= $rows['title']; ?></td>
                                <td><?= $rows['author']; ?></td>
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
                                    <a href="delete.php?target_id=<?=$rows['id'] ?>" class="btn btn-danger">Delete</a>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- DataTables Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/2.0.1/sorting/datetime-moment.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.0/af-2.7.0/b-3.0.0/b-colvis-3.0.0/b-html5-3.0.0/b-print-3.0.0/cr-2.0.0/date-1.5.2/fc-5.0.0/fh-4.0.0/kt-2.12.0/r-3.0.0/rg-1.5.0/rr-1.5.0/sc-2.4.0/sb-1.7.0/sp-2.3.0/sl-2.0.0/sr-1.4.0/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#list-agenda").DataTable({
                responsive: {
                detail: false
            },
            keys: true,
            processing: true,
            layout: {
                bottomStart: 'pageLength',
                bottomEnd: 'paging',
                dom: 'Bfrtip',
                topStart: {
                    buttons: [
                    {
                        text: 'Add Agenda',
                        action: function (e, dt, node, config) {
                            $('#addAgenda').modal('show');
                        },
                        className:'btn-info'
                    },
                    {
                        extend:'spacer',
                        style: 'bar'
                    },
                    {
                        extend: 'excel',
                        text: 'Import to Excel',
                        key: {
                            key: 'e',
                            altKey: true
                        },
                        className: 'btn-success'
                    },
                    {
                        extend: 'spacer',
                        style: 'bar'
                    },
                    {
                        extend: 'pdf',
                        text: 'Import to PDF',
                        className: 'btn-danger'
                    },
                    {
                        extend: 'spacer',
                        style: 'bar'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        className: 'btn-warning'             
                    }]
                },
            },
        });
    });
    </script>
</body>
</html>
<?php 

}
else {
    header("Location: login.php");
    exit();
}
?>