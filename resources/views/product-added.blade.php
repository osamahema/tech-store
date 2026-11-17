@extends('layouts.app')

@section('content')

<h1 class="page-title">Product Added Successfully!</h1>

<div class="product-card">

    <h3>{{ $product['name'] }}</h3>

    <p class="price">{{ $product['price'] }} NIS</p>

    <p>Category: {{ $product['category'] }}</p>

    <a href="/products" class="btn">View Products</a>

</div>

@endsection