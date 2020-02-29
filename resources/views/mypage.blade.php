<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    プロフィール <br>
    <form action=" /" method="POST">
    @csrf
        名前: <input type="text" name="name" value="{{ $auths->name }}"><br>
        メールアドレス: <input type="email" name="email" value="{{ $auths->email}}"> <br>
        <input type="submit" value="変更">
    </form>

    
    <a href="/talk">ホームに戻る</a>
</body>
</html>