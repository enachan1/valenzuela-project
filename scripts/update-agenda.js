$(document).ready(function () {
    $(".update-agenda-btn").on("click", () => {
        
        
        $('tbody').on('click', '.update-agenda-btn', function() {
            
            $("#update-agenda").modal("show");
    
            var tablerow = $(this).closest("tr");
            var tableData = tablerow.children("td").map(function() {
                return $(this).text().trim();
            }).get();
    
            console.log(tableData[0]);
            

            $("#update-title").val(tableData[0]);
            $("#update-date").val(tableData[1]);
            // $("#id").val(tableData[3]);
        });
    })
});