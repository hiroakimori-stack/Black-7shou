<head>
    <meta charset="UTF-8">
    <title>Black</title>
</head>

@include('layouts.notlogin_header')

<body class="antialiased contact-back">

<section class="contact-form" >
    <form method="post" action="/complete">
        @csrf
        <div class="contact-menu">
            <h2>Contact</h2>
            <div class="contact-list">
                <h3>お問い合わせ内容をご確認ください。</h3>
                <label>お名前</label>
                <p class="confirm">{!! htmlspecialchars($name) !!}</p>
                <input name="name" value="{{$name}}" type="hidden">

                <label>メールアドレス</label>
                <p class="confirm">{!! htmlspecialchars($email) !!}</p>
                <input name="email" value="{{$email}}" type="hidden">

                <label>電話番号</label>
                <p class="confirm">{!! htmlspecialchars($tel) !!}</p>
                <input name="tel" value="{{$tel}}" type="hidden">

                <label> お問い合わせ内容</label>
                <p class="confirm">{!! htmlspecialchars($body) !!}</p>
                <input name="body" value="{{ nl2br($body) }}" type="hidden">
            </div>

            <div class="contact-btn">
                <input type='button' onclick="history.back(-1)" value="戻る" name='back' class="back-button">
                <input type="submit" value="送信する" name='send' class="send-button">
            </div>
        </div>
    </form>
</section>

@include('layouts.footer')
</body>