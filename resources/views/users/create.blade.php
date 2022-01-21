@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Marinos</title>
    </head>
    <body>
        <h1>プロフィール情報の登録</h1>
        <form action="/users/{{auth()->user()->id}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="プロフィール画像">
                <h2>●プロフィール画像</h2> 
                <input type="file" name="file">
            </div>
            <div class="sex">
            
                <h2>●性別</h2>
                <select name="性別">
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select>
            </div>
            <div class="生年月日">
                <h2>●生年月日</h2>
                <input type="date" name="user[date_of_birth]" placeholder="生年月日"/>
            </div>
            <div class="サポーターズシートの有無">
                <h2>●サポーターズシートの有無</h2>
                 <select name="サポーターズシートの有無">
                    <option value="●">●</option>
                    <option value="✖︎">✖︎</option>
                </select>
            </div>

            <div class="好きな選手">
               <h2>●好きな選手</h2>
                <select name="好きな選手">
                @foreach($players as $player)
                    <option value="{{$player->id}}">{{$player->number. $player->place. $player->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="観戦場所(コロナ前)">
                <h2>●観戦場所(コロナ前)</h2>
                <select name="観戦場所（コロナ禍）">
                @foreach($places as $place)
                    <option value="{{$place->id}}">{{$place->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="観戦場所（コロナ禍）">
                <h2>●観戦場所（コロナ禍）</h2>
               <select name="観戦場所（コロナ禍）">
                @foreach($places as $place)
                    <option value="{{$place->id}}">{{$place->name}}</option>
                @endforeach
                </select>
            </div>
            <input type="submit" value="実行"/>
        </form>
    @endsection
        