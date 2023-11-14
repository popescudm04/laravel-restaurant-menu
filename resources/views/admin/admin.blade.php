<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="d-flex" id="wrapper">
        @include('layouts.sidenav')
        <div class="px-0 container-fluid" id="page-content-wrapper">
            @include('layouts.topnav')
            <div class="container-fluid">
                @include('admin.categories')
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>

</body>

</html>
