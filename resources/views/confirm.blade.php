<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" >
    <title>お問い合わせフォーム|確認画面</title>
</head>
<body>
    <div class="wrapper last-wrapper">
        <div class="container">
            <div class="wrapper-title">
                <h3>お問い合わせ内容確認</h3>
            </div>
            <form action="{{ action('NextController@send') }}" method="POST" class="conf-form">
                @csrf
                <div class="form-group">
                    <p class="Form-Item-Label">
                        <span class="Form-Item-Label-Required">必須</span>会社名
                    </p>
                    <p>{{$company}}</p>
                    <input type="hidden" name="company" value="{{$company}}">
                </div>
                <div class="form-group">
                <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span>氏名
                </p>
                    <p>{{$name}}</p>
                </div>
                <div class="form-group">
                <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span>電話番号
                </p>
                    <p>{{$phoneNumber}}</p>
                </div>
                <div class="form-group">
                <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span>メールアドレス
                </p>
                    <p>{{$email}}</p>
                </div>
                <div class="form-group">
                <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span>お問い合わせ内容
                </p>
                    <p>{{$message}}</p>
                </div>
                <p class="form-confirm">この内容で送信してよろしいですか？</p>
                <button type="submit" class="Form-Btn">送信する</button>
            </form>
        </div>
    </div>
</body>
</html>