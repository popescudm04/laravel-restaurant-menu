<div style="display: none" class="container-fluid" id="addCategoriesDiv">
    <div class="container-fluid my-3">
        <h3 class="text-primary">Add new category</h3>
    </div>

    <form method="POST" action="{{ url('addCategory') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Category name</label>
            <input type="text" class="form-control" name="categoryName">
        </div>

        <div class="mb-3">
            <label class="form-label">Category image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Add category</button>
    </form>
    <div class="my-3" style="width: 8%">
        <a class="list-group-item p-3" href="{{ url('categories') }}">Return</a>
    </div>

</div>
