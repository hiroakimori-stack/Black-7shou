<head>
    <meta charset="UTF-8">
    <title>Black管理画面</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="admin-back">
    @include('layouts.admin_header')

    <div class="allitem_admin">
        <form method="post" action="{{ route('item.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="insert-menu">
                <h2>商品登録</h2>
                <div class="insert-list">
                    <label for="name">商品名</label>
                    <p class="confirm"><input type="text" id="name" name="name" value="{{ old('name') }}" class="form_contents"></p>
                    <label for="detail">詳細</label>
                    <p class="confirm"><input type="text" id="detail" name="detail" value="{{ old('detail') }}" class="form_contents"></p>
                    <label for="price">価格</label>
                    <p class="confirm"><input type="number" id="price" name="price" value="{{ old('price') }}" class="form_contents"></p>
                    <label for="quantity">在庫</label>
                    <p class="confirm"><input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" class="form_contents"></p>
                    <label for="image">画像</label>
                    <p class="confirm"><input type="file" id="image" name="image" multiple accept=“image/png,image/jpeg/jpg”></p>
                </div>
                <div class="contact-btn">
                    <input type="submit" value="登録する" name='send' class="send-button">                </div>
            </div>
        </form>
    </div>

    @include('layouts.admin_footer')
</body>