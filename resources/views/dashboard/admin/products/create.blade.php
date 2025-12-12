@extends('dashboard.app.admin.layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0"><i class="fa-solid fa-plus me-2"></i>Add New Product</h4>
                        <a href="{{ route('products.index') }}" class="btn btn-light btn-sm">
                            <i class="fa-solid fa-arrow-left me-1"></i> Back to Products
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required placeholder="Enter product name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Price <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price') }}" required placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Stock Quantity <span class="text-danger">*</span></label>
                                <input type="number" name="stock" class="form-control" value="{{ old('stock', 0) }}" required placeholder="0">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Category</label>
                                <input type="text" name="category" class="form-control" value="{{ old('category') }}" placeholder="e.g., Electronics, Clothing">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Enter product description">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Product Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" id="productImage">
                                <small class="text-muted">Max size: 2MB. Formats: JPG, PNG, GIF</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Status</label>
                                <select name="is_active" class="form-select">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div id="imagePreview" class="d-none">
                                    <label class="form-label fw-bold">Image Preview</label>
                                    <div>
                                        <img id="preview" src="" alt="Preview" class="img-thumbnail" style="max-width: 300px; max-height: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                                <i class="fa-solid fa-times me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-save me-1"></i> Create Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Image preview functionality
    document.getElementById('productImage').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
                document.getElementById('imagePreview').classList.remove('d-none');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection