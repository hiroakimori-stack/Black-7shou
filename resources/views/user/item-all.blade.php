<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Black商品一覧</title>
        <link rel="stylesheet" type="text/css" href="/css/home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
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

        <div class="advertisement">
        </div>

        <div class="items" id="items">
            <h1>Items</h1>
            <ul class="item-box">
                @foreach($items as $item)
                <li class="item-content">
                    <a href="{{ route('itembuy.show', $item->id)}}">
                        <img src="{{  \Storage::url($item->image) }}" class="img1">
                    </a>
                    <h3>{{ $item->name }}</h3>
                    <p>{{ $item->price }}円</p>
                </li>
                @endforeach
            </ul>
        </div>

        @include('layouts.footer')
    </body>

</html>