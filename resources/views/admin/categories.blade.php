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

            <div id="mainCategoryDiv">
                <div id="categoriesDiv">
                    <div class="mt-2 container-fluid">
                        <button type="button" class="btn btn-secondary" id="addCategoryButton">Add category</button>
                    </div>
                    <ul class="mt-3  list-group mx-2" id="categoryList">
                        @foreach ($data as $i)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="name">{{ $i->name }}</span>
                                <div class="">
                                    <a href="{{ url('edit-category/'.$i->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    
                                    <a href="{{ route('deleteCategory', $i->id) }}"><button type="button" class="btn btn-close"></button></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @include('admin.addCategories')
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>

</body>

</html>
