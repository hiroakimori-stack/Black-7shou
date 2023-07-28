<head>
    <meta charset="UTF-8">
    <title>Black</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="admin-back">
    @auth()
        @include('layouts.login_header')
    @endauth

    @guest
        @include('layouts.notlogin_header')
    @endguest

    <div class="allitem_admin">
        <h2>ユーザー情報</h2>
        <div class=user-main>
            <table>
                <tr>
                    <th>ユーザー名</th><td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th><td>{{ Auth::user()->email }}</td>
                </tr>
            </table>
        </div>
    </div>

    @include('layouts.footer')
</body>