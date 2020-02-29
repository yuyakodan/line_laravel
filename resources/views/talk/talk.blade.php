<html>
    <head>
        <title>トーク画面</title>
        <link href="{{ asset('css/talk.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <div class="talk">
        <div class="talk-screen">
            @foreach ($talks as $item)
            @include('component.talk', ['item' => $item])
            @endforeach
        </div>
        <div class="talk-input">
        <form method="post" action="/talk">
            {{ CSRF_field() }}
            <textarea class="talk-textarea" placeholder="入力してください" name="content" ></textarea>
            <button type="submit" class="submit" >送信する</button>
            </form>
        </div>
    </div>
    <a href ="/">ユーザーページ</a>
</html>
