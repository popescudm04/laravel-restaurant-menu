$(document).ready(function() {
    $('#adminButton').on('click', function() {
        // Make an AJAX request to fetch the login form content
        $.ajax({
            url: '/login-form',
            method: 'GET',
            success: function(data) {
                // Populate the modal body with the login form content
                $('#loginModal .modal-body').html(data.loginForm);

                // Show the login modal
                $('#loginModal').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle error if the request fails
                console.error(error);
            }
        });
    });
});
