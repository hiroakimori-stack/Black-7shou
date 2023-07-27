<head>
    <meta charset="UTF-8">
    <title>Black</title>
</head>
<body class="login-back">
    @include('layouts.notlogin_header')

    <div class="login-form">
        <h2 class="login-inner">Login</h2>
        <div class=type-select>
            <button class="type">
                <p><a href="/login">Login</a></p>
            </button>
            <button class="type type-color">
                <p><a href="/admin/login">管理者</a></p>
            </button>
        </div>
        @isset($errors)
            <p class="error-text">{{ $errors->first('message') }}</p>
        @endisset
        <form action="{{ url('/admin/login') }}" method="post">
        @csrf
            <div>
                <label for="email" class="content-text">メールアドレス</label>
                <input type="text" name="email" value="{{old('email')}}" class="email" placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="content-text">パスワード</label>
                <input type="password" name="password" class="password" placeholder="Enter your password">
            </div>

            <div class="loginnow-btn">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-20">
                Login now
                </button>
            </div>
        </form>
        <p class="notaccount">Don't have an account? <a href="http://localhost/index.php/register" class="signup-btn">
                Signup
                </a></p>
    </div>

    @include('layouts.footer')
</body>