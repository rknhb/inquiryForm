<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" >
    <title>お問い合わせフォーム</title>
</head>

<body>
    <form action="{{ action('NextController@index') }}" method="POST">
        @csrf
        <div class="Form">
            <div class="Form-Item">
                <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span>会社名
                </p>
                <input type="text" name="company" class="Form-Item-Input" placeholder="例）株式会社令和">
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
                <input type="text" name="name" class="Form-Item-Input" placeholder="例）山田太郎">
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                <input type="text" name="phoneNumber" class="Form-Item-Input" placeholder="例）000-0000-0000">
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                <input type="email" name="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                <textarea name="message" class="Form-Item-Textarea"></textarea>
            </div>
            <input type="submit" class="Form-Btn" value="送信する">
        </div>
    </form>
</body>
</html>