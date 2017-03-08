/**
 * Created by ASUS-PC on 12/13/2016.
 */
$(document).ready( function () {
    $('#table').DataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        "sPaginationType": "full_numbers",
        "iDisplayLength": 5,

    });
});
