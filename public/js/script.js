$(document).ready(function () {
    //Show login form
    $('#adminButton').on('click', function () {
        $('#loginModal').modal('show');
    });
    
    $('#addCategoryButton').on('click', function () {
        $('#categoriesDiv').hide();
        $('#addCategoriesDiv').fadeIn();
    });


    
});
