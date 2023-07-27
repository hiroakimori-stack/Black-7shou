<head>
    <meta charset="UTF-8">
    <title>Black管理画面</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="admin-back">
    @include('layouts.admin_header')

    <div class="itemindex-back">
        <h2>商品一覧</h2>
        <div class=item-main>
            <table class="item-box">
                <tr>
                    <th>商品画像</th>
                    <th>商品名</th>
                    <th>詳細</th>
                    <th>価格</th>
                    <th>数量</th>
                    <th>変更</th>
                    <th>削除</th>
                </tr>
                @foreach($items as $item)
                <tr class="border">
                    <td><img class="item-img" src="{{  \Storage::url($item->image) }}"></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->detail }}</td>
                    <td>{{ $item->price }}円</td>
                    <td>{{ $item->quantity }}個</td>
                    <form action="{{ route('itemdestroy', ['id'=>$item->id]) }}" method="POST">
                    @csrf
                    <td class="edit"><a href="{{ route('itemedit',$item->id) }}">変更</a></td>
                    <td><button type="submit" class="delete" onclick="return confirm('本当に削除しますか？')">削除</button></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include('layouts.admin_footer')
</body>