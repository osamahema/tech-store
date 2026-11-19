@extends('layouts.app')

@section('title', 'Add Product - Tech Store')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Add New Product</h1>

<div class="row">
    <div class="col-lg-8">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Product Information
                </h6>
            </div>

            <div class="card-body">

                <form action="/add-product" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Enter product name"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Price (NIS)</label>
                        <input type="number"
                               name="price"
                               class="form-control"
                               value="{{ old('price') }}"
                               min="0"
                               step="0.01"
                               placeholder="Enter product price"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Category</label>

                        <select name="category" class="form-control" required>
                            <option value="">Select Category</option>
                            <option value="Phones">Phones</option>
                            <option value="Computers">Computers</option>
                            <option value="Accessories">Accessories</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Add Product
                    </button>

                    <a href="/products" class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection