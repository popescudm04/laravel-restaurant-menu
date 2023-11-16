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
            <div id="topnav">
                @include('layouts.topnav')
            </div>

            <div class="container-fluid" id="editCategoriesDiv">
                <div class="container-fluid my-3">
                    <h3 class="text-primary">Edit category</h3>
                </div>

                <form method="POST" action="{{ route('updateCategory', $data->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Category name</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Edit category</button>
                </form>
                @if (session()->has('status'))
                    <div class="alert alert-success mt-3">
                        {{ session()->get('status') }}
                    </div>
                @endif

                <div class="my-3" style="width: 8%">
                    <a class="list-group-item p-3" href="{{ url('categories') }}">Return</a>
                </div>
            </div>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>

</body>

</html>
