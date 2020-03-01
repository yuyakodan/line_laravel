<!DOCTYPE html>
<html lang="ja">
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>トーク画面</title>
        <link href="{{ asset('css/talk.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('/js/app.js') }}"></script>
    </head>
    <div class="talk">
        <div class="talk-first">
        <div class="talk-title">
            <p>トーク画面</p>
        </div>
            <div class="talk-screen">
                @foreach ($talks as $item)
                @include('component.talk', ['item' => $item])
                @endforeach
            </div>
        </div>
            
        <div class="talk-input">
        <form method="post" action="/talk">
            {{ CSRF_field() }}
            <textarea class="talk-textarea" placeholder="入力してください" name="content"  onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
            <br />
            <button type="submit" class="submit" id="submit" >送信する</button>
            </form>
        </div>
    </div>
    <a href ="/">ユーザーページ</a>
    
</html>


