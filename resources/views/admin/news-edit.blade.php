<head>
    <meta charset="UTF-8">
    <title>Black管理画面</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="admin-back">
    @include('layouts.admin_header')

    <div class="allitem_admin">
        <h2>ニュース編集</h2>
        <div class=edit-main>
            <form action="{{ route('newsedit',$news->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="#">
                    <p>>タイトル</p>
                    <input type="text" name="info" value="{{ $news->info }}" class="#">
                </div>
                <div class="#">
                    <p>詳細</p>
                    <input type="text" name="detail" value="{{ $news->detail }}" class="#">
                </div>
                <div class="contact-btn">
                    <input type='button' onclick="history.back(-1)" value="戻る" name='back' class="back-button">
                    <input type="submit" value="決定" class="send-button">
                </div>
        </form>
        </div>
    </div>

    @include('layouts.admin_footer')
</body>