@extends('layouts.app')

@section('title', 'Products - Tech Store')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Products</h1>

    <a href="/add-product" class="btn btn-primary btn-sm shadow-sm">
        <i class="fas fa-plus fa-sm"></i> Add New Product
    </a>
</div>

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Products List
        </h6>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover" width="100%" cellspacing="0">

                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price (NIS)</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($products as $product)

                        <tr>
                            <td>{{ $product->id }}</td>

                            <td>{{ $product->name }}</td>

                            <td>{{ number_format($product->price, 2) }}</td>

                            <td>
                                <span class="badge badge-info">
                                    {{ $product->category }}
                                </span>
                            </td>

                            <td>
                                <a href="/edit/{{ $product->id }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <a href="/delete/{{ $product->id }}"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure you want to delete this product?')">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center">
                                No products found.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection