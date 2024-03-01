<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.0/af-2.7.0/b-3.0.0/b-colvis-3.0.0/b-html5-3.0.0/b-print-3.0.0/cr-2.0.0/date-1.5.2/fc-5.0.0/fh-4.0.0/kt-2.12.0/r-3.0.0/rg-1.5.0/rr-1.5.0/sc-2.4.0/sb-1.7.0/sp-2.3.0/sl-2.0.0/sr-1.4.0/datatables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-table m-5">
        <table id="myTable" class="display table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Author</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td>Title Here</td>
                    <td>2021-07-08</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0003</td>
                    <td>Title Here</td>
                    <td>2022-01-07</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0004</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0005</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0006</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0007</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0008</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0009</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
                <tr>
                    <td>0010</td>
                    <td>Title Here</td>
                    <td>2021-09-20</td>
                    <td>Author Here</td>
                    <td>Status Here</td>
                </tr>
            </tbody>
        </table>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/2.0.1/sorting/datetime-moment.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.0/af-2.7.0/b-3.0.0/b-colvis-3.0.0/b-html5-3.0.0/b-print-3.0.0/cr-2.0.0/date-1.5.2/fc-5.0.0/fh-4.0.0/kt-2.12.0/r-3.0.0/rg-1.5.0/rr-1.5.0/sc-2.4.0/sb-1.7.0/sp-2.3.0/sl-2.0.0/sr-1.4.0/datatables.min.js"></script>
<script>
    var table = $(document).ready( function () {
        $('#myTable').DataTable({
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
                    buttons: [{
                        extend: 'excel',
                        text: 'Import to Excel',
                        key: {
                            key: 'e',
                            altKey: true
                        },
                    },
                    {
                        extend: 'spacer',
                        style: 'bar'
                    },
                    {
                        extend: 'pdf',
                        text: 'Import to PDF'
                    },
                    {
                        extend: 'spacer',
                        style: 'bar'
                    },
                    {
                        extend: 'print',
                        text: 'Print'               
                    }]
                },
                top1: {
                    searchBuilder: {
                        depthLimit: 2
                    },
                },
                dom: 'Qfrtip'
            },
            language:{
                    searchBuilder: {
                        title: 'Filter Here'
                    }
                },
        });
        $('#min-input').dtDateTime({
            buttons: {
                today: true,
                clear: true
            }
        });
        $('#max-input').dtDateTime({
            buttons: {
                today: true,
                clear: true
            }
        });
    });
</script>
</body>
</html>