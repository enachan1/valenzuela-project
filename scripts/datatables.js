$(document).ready(function () {
    var table = $("#list-agenda").DataTable({
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
            },
            {
                extend: 'excel',
                text: 'Import to Excel',
                filename: "e-agenda",
                key: {
                    key: 'e',
                    altKey: true
                },
                className: 'btn-success',
                exportOptions: {
                    columns: 'th:not(:last-child)'
                }
            },
            {
                extend: 'spacer',
            },
            {
                extend: 'pdf',
                text: 'Import to PDF',
                className: 'btn-danger',
                exportOptions: {
                    columns: 'th:not(:last-child)'
                }
            },
            {
                extend: 'spacer',
            },
            {
                extend: 'print',
                text: 'Print',
                className: 'btn-warning',
                exportOptions: {
                    columns: 'th:not(:last-child)'
                }           
            }]
        },
    },
});

// Add event listeners to the date inputs
$('#min-date, #max-date').change(function() {
// Get the min and max dates
var minDate = $('#min-date').val();
var maxDate = $('#max-date').val();

// Filter the DataTable based on the date range
table.draw();
});

// Custom filtering function for date range
$.fn.dataTable.ext.search.push(
function(settings, data, dataIndex) {
    var minDate = $('#min-date').val();
    var maxDate = $('#max-date').val();
    var date = data[3]; // Assuming date is in the third column

    if ((minDate === "" || maxDate === "") ||
        (date >= minDate && date <= maxDate)) {
        return true;
    }
    return false;
}
);
});