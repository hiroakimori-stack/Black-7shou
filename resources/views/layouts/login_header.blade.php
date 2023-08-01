<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

<div class="header">
    <a href="/"><img src="http://localhost/img/logo.png"></a>
    <div class="header-menu">
        <a class="header-list" href="http://localhost/index.php">HOME</a>
        <a class="header-list" href="http://localhost/index.php#about">ABOUT</a>
        <a class="header-list" href="http://localhost/index.php#items">ITEMS</a>
        <a class="header-list" href="{{ url('/contact') }}">CONTACT</a>
        <a class="header-list" href="/user-profile">USER INFO</a>
        <a href="#"><i class="fas fa-duotone fa-cart-shopping" style="--fa-primary-color: #e4e4e7; --fa-secondary-color: #ffffff;"></i><p style="font-size:5px;">CART</p></a>
        <a class="header-list" href="/logout">Logout</a>
    </div>
</div>
