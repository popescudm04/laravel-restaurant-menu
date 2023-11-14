<div style="display: none" id="categoriesDiv">
    <div class="mt-2 container-fluid">
        <button type="button" class="btn btn-secondary" id="addCategoryButton">Add category</button>
    </div>
    <ul class="mt-3  list-group mx-2">
        @foreach ($data as $i)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="name">{{$i->name}}</span>
            <div class="">
                <button type="button" class="btn btn-secondary">Edit</button>
                <button type="button" class="btn btn-close">
            </div>
        </li>
        @endforeach
    </ul>
</div>
