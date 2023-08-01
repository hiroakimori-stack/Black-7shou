<head>
    <meta charset="UTF-8">
    <title>Black</title>
</head>

@auth()
    @include('layouts.login_header')
@endauth

@guest
    @include('layouts.notlogin_header')
@endguest

<body class="antialiased contact-back">

<section class="contact-form" >
    <form method="post" action="">
        @csrf
        <div class="contact-menu">
            <h2>Contact</h2>
            <div class="contact-list">
                <h4>この度は、お問い合わせをありがとうございました。<br><br>
                    送信が完了しました。<br>
                    担当者からのご連絡をお待ちください。<br>
                </h4>
            </div>

            <div class="complete-btn">
                <a href="http://localhost/index.php"><input type='button' value="戻る" class="back-button"></a>
            </div>
        </div>
    </form>
</section>

@include('layouts.footer')
</body>