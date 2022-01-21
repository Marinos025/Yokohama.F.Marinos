@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <h1>userの詳細画面</h1>
        <form action="/users/{{auth()->user()->id}}" method="POST">
            @csrf
            <div class="検索結果">
                <table border="1">
                    <tr>
                        <th>date_of_birth</th>
                        <th>sex</th>
                        <th>Possession of supporters seat</th>
                        <th>before_colona_place</th>
                        <th>after_colona_place</th>
                        <th>player<th>
                        <th>チャットはこちら<th>
                        <th>プロフィール画像</th>
                    </tr>
                    <tr>
                        <td>{{$user->date_of_birth}}</td>
                        <td>{{$user->sex}}</td>
                        <td>{{$user->Possession_of_supporters_seat}}</td>
                        <td>{{$user->after_colona_place}}</td> 
                        <td>{{$user->before_colona_place}}</td>
                        <td>{{$user->player_id}}</td>
                        <td><a href="/users/chat/{{$user->id}}">チャット</a></td>
                        <td>@foreach($user as $users)
                            @if ($user->image_path)
                            <!-- 画像を表示 -->
                            <img src="{{ $user->image_path }}">
                            @endif
                            @endforeach
                        </td>
                      </tr>
                </table>  
            </div>
        @endsection
  
                        
                        
                        
                        
                        
                        
                        
                        
                  