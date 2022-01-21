@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <h1>□検索結果</h1>
            @csrf
            <div class="検索結果">
                <h2>検索結果</h2>
                      <table border="1">
                            <tr>
                                <th>before_colona_place</th>
                                <th>after_colona_place</th>
                                <th>date_of_birth</th>
                                <th>詳細はこちら</th>
                            </tr>
                             @foreach($users as $user)
                            <tr>
                                <td>{{$user->before_colona_place}}</td>
                                <td>{{$user->after_colona_place}}</td>
                                <td>{{$user->date_of_birth}}</td>
                                <td>
                                    <a href="/users/{{ $user->id }}">詳細</a>
                                </td>
                            </tr>
                             @endforeach
                        </table>    
                    </html>    
                </div>
            @endsection