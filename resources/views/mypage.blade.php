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
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>