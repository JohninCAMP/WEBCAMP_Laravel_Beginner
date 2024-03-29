{{-- Chapter15 v1.2.0「会員登録(簡易)追加」 --}}
@extends('layout')

{{-- タイトル --}}
@section('title')(会員登録画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザーの登録</h1>
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            <form action="/user/register" method="post">
                @csrf
                名前:<input name="name" value="{{ old('name') }}"><br>
                email：<input name="email" value="{{ old('email') }}"><br>
                パスワード：<input  name="password" type="password"><br>
                <button>登録する</button>
            </form>
@endsection