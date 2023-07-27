<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Black</title>
        <link rel="stylesheet" type="text/css" href="/css/home.css">

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

        <div class="top">
            <img src="http://localhost/img/top.png">
        </div>

        <div class="about" id="about">
            <h1>Black</h1>
            <p> 黒色はファッションの要です。<br><br>
                人気の色だからこそアイテム数も多くあるが故にありきたりな色として評価されることもあります。<br><br>
                しかし、黒といっても一色ではなく、素材や質感も様々です。<br><br>
                そんな黒にこだわる方は是非こちらでご希望のアイテムを探してください。<br>
            </p>
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
                    <p>{{ $item->price }}</p>
                </li>
                @endforeach
            </ul>
        </div>
        @include('layouts.footer')
    </body>
</html>