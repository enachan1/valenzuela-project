$(document).ready(function () {
    var agenda_tbl = $("#list-agenda").DataTable({
    keys: true,
    paging: false,
    scrollCollapse: true,
    scrollY: '580px',
    responsive: {
        details: {
            display: $.fn.dataTable.Responsive.display.childRowImmediate,
            type: 'none',
            target: -1,
            renderer: $.fn.dataTable.Responsive.renderer.listHidden()
        }
    },
    processing: true,
    columnDefs: [{
        searchable: false,
        targets: 4
    }, {targets: 1, responsivePriority: 1}],
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

agenda_tbl.columns.adjust().draw();

// Add event listeners to the date inputs
$('#min-date, #max-date').change(function() {
// Get the min and max dates
var minDate = $('#min-date').val();
var maxDate = $('#max-date').val();

// Filter the DataTable based on the date range
agenda_tbl.draw();
});
// for highlighting search
agenda_tbl.on("draw", ()=> {
    var agenda_body_table = $(agenda_tbl.table().body());
    var search_agenda_tbl = agenda_tbl.search();
    agenda_body_table.unhighlight();

    if(search_agenda_tbl) agenda_body_table.highlight(search_agenda_tbl)

})

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


// //incoming datatable

var incoming = $("#list-incoming").DataTable({
    keys: true,
    responsive: true,
    processing: true,
    layout: {
        bottomStart: 'pageLength',
        bottomEnd: 'paging',
        dom: 'Bfrtip',
        
        topStart: {
            buttons: [
            {
                text: 'Add Incoming',
                action: function (e, dt, node, config) {
                    $('#addIncoming').modal('show');
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

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );

// //outgoing table
// var incoming = $("#list-outgoing").DataTable({
//     keys: true,
//     responsive: true,
//     processing: true,
//     layout: {
//         bottomStart: 'pageLength',
//         bottomEnd: 'paging',
//         dom: 'Bfrtip',
//         topStart: {
//             buttons: [
//             {
//                 text: 'Add Agenda',
//                 action: function (e, dt, node, config) {
//                     $('#addAgenda').modal('show');
//                 },
//                 className:'btn-info'
//             },
//             {
//                 extend:'spacer',
//             },
//             {
//                 extend: 'excel',
//                 text: 'Import to Excel',
//                 filename: "e-agenda",
//                 key: {
//                     key: 'e',
//                     altKey: true
//                 },
//                 className: 'btn-success',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'pdf',
//                 text: 'Import to PDF',
//                 className: 'btn-danger',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'print',
//                 text: 'Print',
//                 className: 'btn-warning',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             }]
//         },
//     },
// });

// // Add event listeners to the date inputs
// $('#min-date, #max-date').change(function() {
// // Get the min and max dates
// var minDate = $('#min-date').val();
// var maxDate = $('#max-date').val();

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );

// //publication tables
// var incoming = $("#list-publications").DataTable({
//     keys: true,
//     responsive: true,
//     processing: true,
//     layout: {
//         bottomStart: 'pageLength',
//         bottomEnd: 'paging',
//         dom: 'Bfrtip',
//         topStart: {
//             buttons: [
//             {
//                 text: 'Add Agenda',
//                 action: function (e, dt, node, config) {
//                     $('#addAgenda').modal('show');
//                 },
//                 className:'btn-info'
//             },
//             {
//                 extend:'spacer',
//             },
//             {
//                 extend: 'excel',
//                 text: 'Import to Excel',
//                 filename: "e-agenda",
//                 key: {
//                     key: 'e',
//                     altKey: true
//                 },
//                 className: 'btn-success',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'pdf',
//                 text: 'Import to PDF',
//                 className: 'btn-danger',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'print',
//                 text: 'Print',
//                 className: 'btn-warning',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             }]
//         },
//     },
// });

// // Add event listeners to the date inputs
// $('#min-date, #max-date').change(function() {
// // Get the min and max dates
// var minDate = $('#min-date').val();
// var maxDate = $('#max-date').val();

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );

// //certification tables
// var incoming = $("#list-certification").DataTable({
//     keys: true,
//     responsive: true,
//     processing: true,
//     layout: {
//         bottomStart: 'pageLength',
//         bottomEnd: 'paging',
//         dom: 'Bfrtip',
//         topStart: {
//             buttons: [
//             {
//                 text: 'Add Agenda',
//                 action: function (e, dt, node, config) {
//                     $('#addAgenda').modal('show');
//                 },
//                 className:'btn-info'
//             },
//             {
//                 extend:'spacer',
//             },
//             {
//                 extend: 'excel',
//                 text: 'Import to Excel',
//                 filename: "e-agenda",
//                 key: {
//                     key: 'e',
//                     altKey: true
//                 },
//                 className: 'btn-success',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'pdf',
//                 text: 'Import to PDF',
//                 className: 'btn-danger',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'print',
//                 text: 'Print',
//                 className: 'btn-warning',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             }]
//         },
//     },
// });

// // Add event listeners to the date inputs
// $('#min-date, #max-date').change(function() {
// // Get the min and max dates
// var minDate = $('#min-date').val();
// var maxDate = $('#max-date').val();

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );

// //transcript table
// var incoming = $("#list-transcript").DataTable({
//     keys: true,
//     responsive: true,
//     processing: true,
//     layout: {
//         bottomStart: 'pageLength',
//         bottomEnd: 'paging',
//         dom: 'Bfrtip',
//         topStart: {
//             buttons: [
//             {
//                 text: 'Add Agenda',
//                 action: function (e, dt, node, config) {
//                     $('#addAgenda').modal('show');
//                 },
//                 className:'btn-info'
//             },
//             {
//                 extend:'spacer',
//             },
//             {
//                 extend: 'excel',
//                 text: 'Import to Excel',
//                 filename: "e-agenda",
//                 key: {
//                     key: 'e',
//                     altKey: true
//                 },
//                 className: 'btn-success',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'pdf',
//                 text: 'Import to PDF',
//                 className: 'btn-danger',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'print',
//                 text: 'Print',
//                 className: 'btn-warning',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             }]
//         },
//     },
// });

// // Add event listeners to the date inputs
// $('#min-date, #max-date').change(function() {
// // Get the min and max dates
// var minDate = $('#min-date').val();
// var maxDate = $('#max-date').val();

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );

// //minutes table
// var incoming = $("#list-minutes").DataTable({
//     keys: true,
//     responsive: true,
//     processing: true,
//     layout: {
//         bottomStart: 'pageLength',
//         bottomEnd: 'paging',
//         dom: 'Bfrtip',
//         topStart: {
//             buttons: [
//             {
//                 text: 'Add Agenda',
//                 action: function (e, dt, node, config) {
//                     $('#addAgenda').modal('show');
//                 },
//                 className:'btn-info'
//             },
//             {
//                 extend:'spacer',
//             },
//             {
//                 extend: 'excel',
//                 text: 'Import to Excel',
//                 filename: "e-agenda",
//                 key: {
//                     key: 'e',
//                     altKey: true
//                 },
//                 className: 'btn-success',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'pdf',
//                 text: 'Import to PDF',
//                 className: 'btn-danger',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'print',
//                 text: 'Print',
//                 className: 'btn-warning',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             }]
//         },
//     },
// });

// // Add event listeners to the date inputs
// $('#min-date, #max-date').change(function() {
// // Get the min and max dates
// var minDate = $('#min-date').val();
// var maxDate = $('#max-date').val();

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );

// //committee table
// var incoming = $("#list-committee").DataTable({
//     keys: true,
//     responsive: true,
//     processing: true,
//     layout: {
//         bottomStart: 'pageLength',
//         bottomEnd: 'paging',
//         dom: 'Bfrtip',
//         topStart: {
//             buttons: [
//             {
//                 text: 'Add Agenda',
//                 action: function (e, dt, node, config) {
//                     $('#addAgenda').modal('show');
//                 },
//                 className:'btn-info'
//             },
//             {
//                 extend:'spacer',
//             },
//             {
//                 extend: 'excel',
//                 text: 'Import to Excel',
//                 filename: "e-agenda",
//                 key: {
//                     key: 'e',
//                     altKey: true
//                 },
//                 className: 'btn-success',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'pdf',
//                 text: 'Import to PDF',
//                 className: 'btn-danger',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'print',
//                 text: 'Print',
//                 className: 'btn-warning',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             }]
//         },
//     },
// });

// // Add event listeners to the date inputs
// $('#min-date, #max-date').change(function() {
// // Get the min and max dates
// var minDate = $('#min-date').val();
// var maxDate = $('#max-date').val();

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );

// //attendance table
// var incoming = $("#list-attendance").DataTable({
//     keys: true,
//     responsive: true,
//     processing: true,
//     layout: {
//         bottomStart: 'pageLength',
//         bottomEnd: 'paging',
//         dom: 'Bfrtip',
//         topStart: {
//             buttons: [
//             {
//                 text: 'Add Agenda',
//                 action: function (e, dt, node, config) {
//                     $('#addAgenda').modal('show');
//                 },
//                 className:'btn-info'
//             },
//             {
//                 extend:'spacer',
//             },
//             {
//                 extend: 'excel',
//                 text: 'Import to Excel',
//                 filename: "e-agenda",
//                 key: {
//                     key: 'e',
//                     altKey: true
//                 },
//                 className: 'btn-success',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'pdf',
//                 text: 'Import to PDF',
//                 className: 'btn-danger',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             },
//             {
//                 extend: 'spacer',
//             },
//             {
//                 extend: 'print',
//                 text: 'Print',
//                 className: 'btn-warning',
//                 exportOptions: {
//                     columns: 'th:not(:last-child)'
//                 }
//             }]
//         },
//     },
// });

// // Add event listeners to the date inputs
// $('#min-date, #max-date').change(function() {
// // Get the min and max dates
// var minDate = $('#min-date').val();
// var maxDate = $('#max-date').val();

// // Filter the DataTable based on the date range
// incoming.draw();
// });

// // Custom filtering function for date range
// $.fn.dataTable.ext.search.push(
// function(settings, data, dataIndex) {
//     var minDate = $('#min-date').val();
//     var maxDate = $('#max-date').val();
//     var date = data[3]; // Assuming date is in the third column

//     if ((minDate === "" || maxDate === "") ||
//         (date >= minDate && date <= maxDate)) {
//         return true;
//     }
//     return false;
// }
// );
});