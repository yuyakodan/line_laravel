<html>
    <head>
        <title>トーク画面</title>
        <link href="{{ asset('css/talk.css') }}" rel="stylesheet">
    </head>
    <div class="talk">
        <div class="talk-screen"></div>
        <div class="talk-input">
        <form method="post" action="/talk">
            <textarea class="talk-textarea" placeholder="入力してください" name="content"></textarea>
            <button type="submit" class="submit">送信する</button>
            </form>
        </div>
    </div>
</html>