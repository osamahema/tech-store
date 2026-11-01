<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Store - Products</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<header>
    <div class="container header-content">
        <div class="logo">Tech Store</div>

        <nav>
            <a href="/">Home</a>
            <a href="/products">Products</a>
            <a href="/add-product">Add Product</a>
        </nav>
    </div>
</header>

<main class="container">

    <h1 class="page-title">Our Products</h1>

    <div class="products">
        @foreach ($products as $product)
            <div class="product-card">
                <h3>{{ $product['name'] }}</h3>
                <p class="price">{{ $product['price'] }} NIS</p>
                <p class="category-name">
                    Category: {{ $product['category'] }}
                </p>
            </div>
        @endforeach
    </div>

    <a href="/add-product" class="btn">Add New Product</a>

</main>

</body>
</html>