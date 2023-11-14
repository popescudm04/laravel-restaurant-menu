$(document).ready(function () {

    $('#adminButton').on('click', function () {
        $('#loginModal').modal('show');
    });

    $('#categoriesButton').on('click', function () {
        if($('#categoriesDiv').is(":hidden"))
            $('#categoriesDiv').show();
        else $('#categoriesDiv').hide();
    });

        

});
