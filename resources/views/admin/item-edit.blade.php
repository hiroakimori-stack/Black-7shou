<head>
    <meta charset="UTF-8">
    <title>Black管理画面</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="admin-back">
    @include('layouts.admin_header')

    <div class="allitem_admin">
        <h2>商品編集</h2>
        <div class=edit-main>
            <form action="{{ route('itemedit',$item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="#">
                    <p>商品名</p>
                    <input type="text" name="name" value="{{ $item->name }}" class="#">
                </div>
                <div class="#">
                    <p>詳細</p>
                    <input type="text" name="detail" value="{{ $item->detail }}" class="#">
                </div>
                <div class="#">
                    <p>価格</p>
                    <input type="text" name="price" value="{{ $item->price }}" class="#">
                </div>
                <div class="#">
                    <p>数量</p>
                    <input type="text" name="quantity" value="{{ $item->quantity }}" class="#">
                </div>
                <!-- <div>
                    <p>画像</p>
                    @if(isset($item->image))
                    <img class="edit-image" src="{{  \Storage::url($item->image) }}">
                    @endif
                    <form method="POST" action="{{ route('update.confirm', ['item' => $item->id]) }}">
                        @csrf
                        <input type="file" name="image">
                        <button>アップロード</button>
                    </form>
                </div> -->
                <div class="contact-btn">
                    <input type='button' onclick="history.back(-1)" value="戻る" name='back' class="back-button">
                    <input type="submit" value="決定" class="send-button">
                </div>
        </form>
        </div>
    </div>

    @include('layouts.admin_footer')
</body>