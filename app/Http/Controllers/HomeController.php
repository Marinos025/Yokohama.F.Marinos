<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home/home');
    }
    
    
    
    //public function __construct()
    //{
        //$this->middleware('auth');
    //}
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index(User $user)
    //{
       
        //$user = Auth::user();
        //dd($user);
        // ログイン者以外のユーザを取得する
        //$users = User::where('id' ,'<>' , $user->id)->get();
        // チャットユーザ選択画面を表示
        //return view('users/chat_user_select')->with(['users'=>$users]);
    //}
}

