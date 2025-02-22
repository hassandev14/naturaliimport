@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Category Listing</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Navbar Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) { ?>
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{ implode(', ', $category->attributes->pluck('name')->toArray())}}</td>
                         <td class="text-center">
                        <img src="{{ asset($category->image_name) }}" alt="{{ $category->name }}" class="img-thumbnail" width="80">
                        </td>
                        <td><a href="{{ route('categories.edit', $category->id) }}">
                                <li class="fa fa-edit"></li>
                            </a>
                            <a href="{{ route('categories.delete', $category->id) }}">
                                <li class="fa fa-trash"></li>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')