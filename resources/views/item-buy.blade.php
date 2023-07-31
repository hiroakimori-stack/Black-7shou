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

        @guest
            @include('layouts.notlogin_header')
        @endguest

        <div class="itemdetail-back">
            <h2>Items</h2>
            <div class="item-main item-detail">
                <!-- <form method="post" action="/insert-cart">
                @csrf -->
                    <table class="item-box itembuy-font">
                        <tr>
                            <th>商品画像</th>
                            <th>商品名</th>
                            <th>詳細</th>
                            <th>価格</th>
                            <th>数量</th>
                        </tr>
                        <tr>
                            <td><img src="{{  \Storage::url($item->image) }}" class="img1"></td>
                            <!-- <td><p class="confirm"><input type="text" id="name" name="name" value="{{ $item->name }}" class="form_contents" disabled></p></td>
                            <td>{{ $item->detail }}</td>
                            <td><p class="confirm"><input type="text" id="price" name="price" value="{{ $item->price }}" class="form_contents" disabled></p></td>
                            <td><p class="confirm"><input type="text" id="quantity" name="quantity" value="{{ $item->quantity }}" class="form_contents" disabled></p></td> -->
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->detail }}</td>
                            <td>{{ $item->price }}円</td>
                            <td>{{ $item->quantity }}個</td>
                        </tr>
                    </table>
                    @auth()
                    <div class="buy-btn buy">
                        <button type="submit" onclick="location.href='/index'">購入</button>
                    </div>
                    @endauth
                    @guest
                    <div class="buy-btn buy">
                        <button type="#" onclick="return confirm('ログインしてから購入してください')">購入</button>
                    </div>
                    @endguest
                <!-- </form> -->
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>