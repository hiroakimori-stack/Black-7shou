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
        
        <div class="news" id="news">
            <h1>News</h1>
            <ul class="news-list list-group">
                @foreach($newss as $news)
                <li class="news_list_item list-group-item">
                    <a href="#">
                        <img src="{{  \Storage::url($news->image) }}" class="img1">
                    </a>
                    <div class=news-inner>
                        <div class=news-inner2>
                            <p>{{ $news->created_at->format('Y年m月d日') }}</p>
                            <h3>{{ $news->info }}</h3>
                        </div>
                        <p>{{ $news->detail }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            {!! $newss->links('pagination::default') !!}
        </div>

        @include('layouts.footer')
    </body>

</html>