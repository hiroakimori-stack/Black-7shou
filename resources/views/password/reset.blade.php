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

    <body class="password-form">
        @include('layouts.notlogin_header')
        <div class="signup-form">
            <h2>Password reset</h2>
            <form action="{{ route('reset.password') }}" method="post">
            @csrf
                <div>
                    <label for="email" class="font-bold">メールアドレス</label>
                    <input type="text" name="email" class="email" required autofocus>
                    @error('email')
                    <div class="red">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="password">新しいパスワード</label>
                    <input type="password" id="password" name="password" class="password" required>
                    @error('password')
                        <div class="red">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation">新しいパスワード（確認）</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="password" required>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    password reset
                    </button>
                </div>
            </form>
        </div>
        @include('layouts.footer')
    </body>
</html>