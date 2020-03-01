<!DOCTYPE html>
<html lang="ja">
@include('component/head')
<head>
    <link href="{{ asset('css/talk.css') }}" rel="stylesheet">
</head>
<body>

<div class="talk">
    <div class="talk-screen">
        @foreach ($talks as $item)
        @include('component.talk', ['item' => $item])
        @endforeach
    </div>
    <div class="talk-input">
        @csrf
        <div id="app">
            <textarea class="talk-textarea" placeholder="入力してください" v-model="formData.content"></textarea>
            <button type="submit" class="submit" v-on:click="submit()">送信する</button>
        </div>
    </div>
</div>
<a href ="/">ユーザーページ</a>
<script>
    new Vue({
        el: '#app',
        data: {
            formData :{
                content: '',
            }
        },
        methods:{
            submit:function(){
                axios.post('/contentPost', this.formData).then(function(req){
                    console.log('更新完了')
                })
            }
        }
    })
</script>
</body>
</html>