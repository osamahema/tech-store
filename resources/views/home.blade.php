@extends('layouts.app')

@section('content')

<h1 class="page-title">Welcome to Tech Store</h1>

<div class="products">

    @foreach ($categories as $category)

        <div class="product-card">

            <h3>{{ $category }}</h3>

            <a href="/products" class="btn">
                View Products
            </a>

        </div>

    @endforeach

</div>

@endsection