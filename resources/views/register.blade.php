<html>
    <head>
        <meta charset="UTF-8">
        <title>Black</title>
    </head>

    <body class="signup-back">
        @include('layouts.notlogin_header')

        @if(isset($messageRegister))
        <p class="messageRegister text-red-500 text-center">{{ $messageRegister}}</p>
        @endif
        <div class="signup-form">
            <h2 class="signup-inner">Signup</h2>
            <form action="http://localhost/index.php/register" method="POST">
            @csrf
                <div>
                    <label for="name" class="content-text">ユーザーネーム</label>
                    <p class="error-text">{{ $errors->first('name') }}</p>
                    <input type="text" name="name" value="{{old('name')}}" class="form_contents">
                </div>

                <div>
                    <label for="email" class="content-text">メールアドレス</label>
                    <p class="error-text">{{ $errors->first('email') }}</p>
                    <input type="text" name="email" value="{{old('email')}}" class="form_contents">
                </div>

                <div>
                    <label for="password" class="content-text">パスワード</label>
                    <p class="error-text">{{ $errors->first('password') }}</p>
                    <input type="password" name="password" class="form_contents">
                </div>
                <div>
                    <label for="password" class="content-text">パスワード確認</label>
                    <p class="error-text">{{ $errors->first('password_confirmation') }}</p>
                    <input type="password" name="password_confirmation" class="form_contents">
                </div>

                <div>
                    <label for="type" class="content-text">属性</label>
                    <p class="error-text">{{ $errors->first('type') }}</p>
                    <select name="type" class="form_contents select-btn">
                        <option value='' disabled selected style='display:none;'>選択してください</option>
                        <option value="1">管理者</option>
                        <option value="2">一般ユーザー</option>
                    </select>
                </div>

                <div class="signup-btn">
                    <button type="submit" class="#">Signup</button>
                </div>
                <p class="loginback-btn"><a href="http://localhost/index.php/login">
                    Login</a></p>
            </form>
        </div>

        @include('layouts.footer')
    </body>

</html>