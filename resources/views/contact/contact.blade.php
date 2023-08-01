<head>
    <meta charset="UTF-8">
    <title>Black</title>
</head>
@auth()
    @include('layouts.login_header')
@endauth

@guest
    @include('layouts.notlogin_header')
@endguest

<body class="antialiased contact-back">

<section class="contact-form" >
    <form method="post" action="/confirm">
        @csrf
        <div class="contact-menu">
            <h2>Contact</h2>
            <div class="contact-list">
            <h3>お問い合わせ内容をご入力ください。</h3>
                <ladel class="list-name">お名前</ladel>
                <!-- <span> ※必須</span> -->
                @if ($errors->has('name'))
                    <p class="error-message" style="color: red;">{{ $errors->first('name') }}</p>
                @endif
                <input class="form_contents" name="name" value="{{ old('name') }}" type="text" placeholder="例) 山田 太郎">
                <br>
                <ladel class="list-name">メールアドレス</ladel>
                <!-- <span> ※必須</span> -->
                @if ($errors->has('email'))
                    <p class="error-message" style="color: red;">{{ $errors->first('email') }}</p>
                @endif
                <input class="form_contents" name="email" value="{{ old('email') }}" type="text" placeholder="例) sample@sample.com">
                <br>
                <ladel class="list-name">電話番号</ladel>
                <!-- <span> ※必須</span> -->
                @if ($errors->has('tel'))
                    <p class="error-message" style="color: red;">{{ $errors->first('tel') }}</p>
                @endif
                <input class="form_contents" name="tel" value="{{ old('tel') }}" type="text" placeholder="例) 08012345678">
                <br>
                <ladel class="list-name">お問い合わせ内容</ladel>
                <!-- <span> ※必須</span> -->
                @if ($errors->has('body'))
                    <p class="error-message" style="color: red;">{{ $errors->first('body') }}</p>
                @endif
                <textarea class="form_contents" name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea>
            </div>

            <div class="contact-btn">
                <input id="button" class="send-button" type="submit" value="確認する">
            </div>
        </div>
    </form>
</section>

@include('layouts.footer')
</body>