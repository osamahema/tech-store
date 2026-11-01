<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Store - Add Product</title>
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

    <h1 class="page-title">Add New Product</h1>

    <div class="form-card">

        <form action="/add-product" method="POST">
            @csrf

            <label>Product Name</label>
            <input type="text" name="name" placeholder="Enter product name" required>

            <label>Price (NIS)</label>
            <input type="number" name="price" placeholder="Enter product price" min="0" required>

            <label>Category</label>
            <select name="category">
                <option>Phones</option>
                <option>Computers</option>
                <option>Accessories</option>
            </select>

            <button type="submit" class="btn">Add Product</button>
        </form>

    </div>

</main>
</body>
</html>