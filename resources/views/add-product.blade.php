@extends('layouts.app')

@section('content')

<h1 class="page-title">Add New Product</h1>

<div class="form-card">

    <form action="/add-product" method="POST">

        @csrf

        <label>Product Name</label>
        <input type="text" name="name"
               placeholder="Enter product name" required>

        <label>Price (NIS)</label>
        <input type="number" name="price"
               placeholder="Enter product price"
               min="0" step="0.01" required>

        <label>Category</label>

        <select name="category" required>
            <option value="Phones">Phones</option>
            <option value="Computers">Computers</option>
            <option value="Accessories">Accessories</option>
        </select>

        <button type="submit" class="btn">
            Add Product
        </button>

    </form>

</div>

@endsection