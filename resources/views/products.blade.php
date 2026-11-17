@extends('layouts.app')

@section('content')

<h1 class="page-title">Our Products</h1>

<div class="products">

    @foreach ($products as $product)

        <div class="product-card">

            <h3>{{ $product->name }}</h3>

            <p class="price">
                {{ $product->price }} NIS
            </p>

            <p class="category-name">
                Category: {{ $product->category }}
            </p>

            <a href="/edit/{{ $product->id }}" class="btn">
                Edit
            </a>

            <a href="/delete/{{ $product->id }}" class="btn"
               onclick="return confirm('Are you sure?')">
                Delete
            </a>

        </div>

    @endforeach

</div>

<a href="/add-product" class="btn">Add New Product</a>

@endsection