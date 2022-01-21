@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <h1>ホーム画面</h1>
            @csrf
            <div class="title">
                <h2>検索はこちら</h2>
                <a href="/users/research">検索</a>
            </div>
            <div class="body">
                <h2>タイムライン</h2>
                <textarea name="post[body]" placeholder="タイムライン一覧"></textarea>
            </div>
@endsection