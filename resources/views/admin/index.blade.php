@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>管理者メニュー</h3>
        <ul>
            <li><a href="{{url('/article')}}">記事管理</a></li>
            <li><a href="{{url('/category')}}">カテゴリ管理</a></li>
            <li><a href="{{url('/tag')}}">タグ管理</a></li>
        </ul>
    </div>
@endsection
