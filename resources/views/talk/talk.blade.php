<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トーク画面</title>
    <link href="{{ asset('css/talk.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="talk">
    <div class="talk-screen">
        @foreach ($talks as $item)
        @include('component.talk', ['item' => $item])
        @endforeach
    </div>
    <div class="talk-input">
    <form method="post" action="/talk">
        @csrf
        <textarea class="talk-textarea" placeholder="入力してください" name="content" ></textarea>
        <button type="submit" class="submit" >送信する</button>
        </form>
    </div>
</div>
<a href ="/">ユーザーページ</a>
@endsection
</body>
</html>