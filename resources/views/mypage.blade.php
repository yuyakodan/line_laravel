<!DOCTYPE html>
<html lang="ja">
@include('component/head')
<body>
    プロフィール <br>
    @csrf
    <div id="app">
        名前: <input type="text" v-model="formData.name"><br>
        メールアドレス: <input type="email" v-model="formData.email"> <br>
        <input type="submit" v-on:click="submit()" value="変更">
        @{{message}}
    </div>
    
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
    <script>
        new Vue({
            el: '#app',
            data: {
                formData :{
                    id: '{{Auth::user()->id}}',
                    name: '{{ $auths->name }}',
                    email:'{{ $auths->email }}',
                },
                message: '',
            },
            methods:{
                submit:function(){
                    axios.post('/postDB', this.formData).then((response)=>{
                        console.log('更新完了')
                        this.message = response.data.message
                    })
                }
            }
        })
    </script>
</body>
</html>