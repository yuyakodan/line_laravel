@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="title">
        <h1>アカウント作ってく？？</h1>
    </div>

    <div class="account">
        <a href="{{ route('login')}}" class="float-right">ログイン</a>
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            <h1>新規アカウント作成</h1>
            <table class="table table-borderless">
                <tr>
                    <th>
                        <p>ユーザー名</p>
                    </th>
                    <td>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>メールアドレス</p>
                    </th>
                    <td>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                        <p>パスワード（再入力）</p>
                    </th>
                    <td>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </td>
                </tr>
            </table>
            <button type="submit" class="login btn btn-info">作成</button>
        </form>
    </div>
</div>
@endsection
