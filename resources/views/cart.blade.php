<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Black</title>
        <link rel="stylesheet" type="text/css" href="/css/home.css">
        <link rel="stylesheet" type="text/css" href="/css/admin.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        @auth()
            @include('layouts.login_header')
        @endauth

        <div class="itemdetail-back">
            <h2>Cart</h2>
            <div class="item-main item-detail">
                <table>
                    <tr>
                        <th class="cart-text">商品名</th>
                        <th class="cart-text">価格</th>
                        <th class="cart-text">個数</th>
                        <th class="cart-text">小計</th>
                        <th class="cart-text">操作</th>
                    </tr>
                    <tr>
                        @foreach($carts as $cart)
                        <td>{{ $cart->name }}</td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>