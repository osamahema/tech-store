<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Store - Product Added</title>
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

    <div class="success-card">

        <h2>Product Added Successfully!</h2>

        <h3>{{ $product['name'] }}</h3>

        <p class="price">{{ $product['price'] }} NIS</p>

        <p class="category-name">
            Category: {{ $product['category'] }}
        </p>

        <a href="/products" class="btn">View Products</a>

        <a href="/add-product" class="btn btn-secondary">Add Another Product</a>

    </div>

</main>
</body>
</html>