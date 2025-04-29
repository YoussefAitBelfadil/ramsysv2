@extends('layouts.admin')

@section('title', 'Edit Product')

@section('header', 'Edit Product')

@section('content')
<div class="card admin-card">
    <div class="card-header">
        <h5 class="mb-0">Edit Product Information</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product['name']) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                        <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
                            <option value="">Select Category</option>
                            <option value="Desktop PC" {{ old('category', $product['category']) == 'Desktop PC' ? 'selected' : '' }}>Desktop PC</option>
                            <option value="Laptop" {{ old('category', $product['category']) == 'Laptop' ? 'selected' : '' }}>Laptop</option>
                            <option value="Components" {{ old('category', $product['category']) == 'Components' ? 'selected' : '' }}>Components</option>
                            <option value="Peripherals" {{ old('category', $product['category']) == 'Peripherals' ? 'selected' : '' }}>Peripherals</option>
                            <option value="Accessories" {{ old('category', $product['category']) == 'Accessories' ? 'selected' : '' }}>Accessories</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $product['description']) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price ($) <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product['price']) }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                            <label class="input-group-text" for="image">Choose file</label>
                        </div>
                        <small class="form-text text-muted">Leave empty to keep the current image</small>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="mt-2">
                            <label class="form-label">Current Image:</label>
                            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-thumbnail" style="max-height: 100px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Specifications <span class="text-danger">*</span></label>
                <div id="specs-container">
                    @foreach($product['specifications'] as $key => $value)
                        <div class="row mb-2 spec-row">
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="specifications[keys][]" value="{{ $key }}" required>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="specifications[values][]" value="{{ $value }}" required>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-danger remove-spec" {{ count($product['specifications']) <= 1 ? 'disabled' : '' }}>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="add-spec">
                    <i class="fas fa-plus me-1"></i> Add Specification
                </button>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i> Back to Products
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i> Update Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Add specification row
        $('#add-spec').click(function() {
            const newRow = `
                <div class="row mb-2 spec-row">
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="specs[keys][]" placeholder="Key (e.g. CPU)" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="specs[values][]" placeholder="Value (e.g. Intel Core i9)" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-outline-danger remove-spec">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            `;
            $('#specs-container').append(newRow);

            // Enable all remove buttons if we have more than one row
            if ($('.spec-row').length > 1) {
                $('.remove-spec').prop('disabled', false);
            }
        });

        // Remove specification row
        $(document).on('click', '.remove-spec', function() {
            $(this).closest('.spec-row').remove();

            // Disable the last remove button if only one row remains
            if ($('.spec-row').length === 1) {
                $('.remove-spec').prop('disabled', true);
            }
        });
    });
</script>
@endsection
