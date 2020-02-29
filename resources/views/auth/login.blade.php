@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="title">
        <h1>チャットしてく？？</h1>
    </div>

    <div class="account">
        <a href="{{ route('register')}} "class="float-right">新規アカウント制作</a>
        <h1>ログイン</h1>
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <table class="table table-borderless">
                <tr>
                    <th>
                        <p>メールアドレス</p>
                    </th>
                    <td>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>パスワード</p>
                    </th>
                    <td>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>自動でログイン</p>
                    </th>
                    <td>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                        </label>
                    </td>
                </tr>
            </table>

            <div class="col-md-8 offset-md-4">
                <button type="submit" class="login btn btn-info">
                    ログイン
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
