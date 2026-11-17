@extends('layouts.app')

@section('content')

<h1 class="page-title">Edit Product</h1>

<div class="form-card">

    <form action="/update/{{ $product->id }}" method="POST">

        @csrf

        <label>Product Name</label>

        <input type="text" name="name"
               value="{{ $product->name }}" required>

        <label>Price (NIS)</label>

        <input type="number" name="price"
               value="{{ $product->price }}"
               min="0" step="0.01" required>

        <label>Category</label>

        <select name="category" required>

            <option value="Phones"
                {{ $product->category == 'Phones' ? 'selected' : '' }}>
                Phones
            </option>

            <option value="Computers"
                {{ $product->category == 'Computers' ? 'selected' : '' }}>
                Computers
            </option>

            <option value="Accessories"
                {{ $product->category == 'Accessories' ? 'selected' : '' }}>
                Accessories
            </option>

        </select>

        <button type="submit" class="btn">
            Update Product
        </button>

    </form>

</div>

@endsection