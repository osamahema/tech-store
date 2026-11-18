<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tech Store</title>

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
            <a href="/users">Users</a>
        </nav>

    </div>
</header>

<main class="container">

    @yield('content')

</main>

</body>
</html>