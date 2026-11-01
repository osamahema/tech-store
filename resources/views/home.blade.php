<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Store - Home</title>
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

    <section class="hero">
        <h1>Welcome to Tech Store</h1>
        <p>Your simple online electronics store.</p>
        <a href="/products" class="btn">Explore Products</a>
    </section>

    <h2 class="section-title">Our Categories</h2>

    <div class="categories">
        @foreach ($categories as $category)
            <div class="category-card">
                {{ $category }}
            </div>
        @endforeach
    </div>

</main>
</body>
</html>