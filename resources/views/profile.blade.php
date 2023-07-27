<head>
    <meta charset="UTF-8">
    <title>Black管理画面</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="admin-back">
    @include('layouts.admin_header')

    <div class="allitem_admin">
        <h2>ユーザー情報</h2>
        <div class=user-main>
            @foreach($admin as $key)
            <table>
                <tr>
                    <th>ユーザー名</th><td>{{ $key->name }}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th><td>{{ $key->email }}</td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>

    @include('layouts.admin_footer')
</body>