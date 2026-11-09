<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Store - Product Form</title>
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

    @if(isset($product))

        <h1 class="page-title">Edit Product</h1>

    @else

        <h1 class="page-title">Add New Product</h1>

    @endif

    <div class="form-card">

        @if(isset($product))

            <form action="/update" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $product->id }}">

        @else

            <form action="/add-product" method="POST">
                @csrf

        @endif

            <label>Product Name</label>

            <input type="text"
                   name="name"
                   value="{{ isset($product) ? $product->name : '' }}"
                   placeholder="Enter product name"
                   required>

            <label>Price (NIS)</label>

            <input type="number"
                   name="price"
                   value="{{ isset($product) ? $product->price : '' }}"
                   placeholder="Enter product price"
                   min="0"
                   required>

            <label>Category</label>

            <select name="category">

                <option value="Phones"
                    {{ isset($product) && $product->category == 'Phones' ? 'selected' : '' }}>
                    Phones
                </option>

                <option value="Computers"
                    {{ isset($product) && $product->category == 'Computers' ? 'selected' : '' }}>
                    Computers
                </option>

                <option value="Accessories"
                    {{ isset($product) && $product->category == 'Accessories' ? 'selected' : '' }}>
                    Accessories
                </option>

            </select>

            @if(isset($product))

                <button type="submit" class="btn">
                    Update Product
                </button>

            @else

                <button type="submit" class="btn">
                    Add Product
                </button>

            @endif

        </form>

    </div>

</main>

</body>
</html>