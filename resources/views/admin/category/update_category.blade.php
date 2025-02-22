@include('layout.header')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Category</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Category</h3>
            </div>
            <hr>

            {{-- Ensure $category exists --}}
            @if(isset($category))
                <form action="{{ route('categories.update', $category->id) }}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf  
                    @method('PUT') 
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Category Name</label>
                        <input name="name" type="text" class="form-control"
                            aria-required="true" aria-invalid="false"
                            value="{{ old('name', $category->name) }}">
                    </div>

                    <div class="border p-3 rounded shadow-sm mb-3">
                        <label class="font-weight-bold">Select Navbar Name</label>
                        <div class="form-check">
                            <input type="checkbox" id="select-all-brand">
                            <label for="select-all-brand" class="font-weight-bold">Select All</label>
                        </div>
                        @foreach ($attributes as $attribute)
                        <div class="form-check">
                            <input type="checkbox" class="attribute-checkbox" 
                                name="attribute_ids[]" value="{{ $attribute->id }}" 
                                id="attribute-{{ $attribute->id }}" 
                                {{ in_array($attribute->id, $selectedAttributes) ? 'checked' : '' }}>
                            <label for="attribute-{{ $attribute->id }}">{{ $attribute->name }}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-8">
                        <label for="image">Category Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <small class="text-muted">Upload new image or keep the existing one</small><br>
                        @if($category->image_name)
                            <img src="{{ asset($category->image_name) }}" alt="{{ $category->name }}" class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Update Category</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            @else
                <div class="alert alert-danger">Category not found!</div>
            @endif
        </div>
    </div>
</div>

@include('layout.footer')
