$(document).ready(function () {
    //Show login form
    $('#adminButton').on('click', function () {
        $('#loginModal').modal('show');
    });
    

    var viewDiv = $('');
    $('#categoriesButton').on('click', function () {
        viewDiv.hide();
        viewDiv = $('#categoriesDiv');
        if($('#categoriesDiv').is(":hidden"))
            $('#categoriesDiv').fadeIn();
        else $('#categoriesDiv').fadeOut();
    });

    $('#addCategoryButton').on('click', function () {
        viewDiv.hide();
        viewDiv = $('#addCategoriesDiv');
        $('#addCategoriesDiv').fadeIn();
    });

    
});
