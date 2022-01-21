<?php

namespace App\Http\Controllers;

use App\User;
use App\Place;
use App\Player;
use Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user){
        //
    }
    
    
    public function create(User $user, Place $place, Player $player)
    {
        return view('users/create')->with(['places'=>$place->get(), 'players'=>$player->get()]);
    }
    
    public function store(Request $request, User $user)
    {
        $input[] = $request['file'];
        //$file = $request->file('file');
        $user->fill($input)->save();
       // $file = $request->file('file');

        $file = $request->file('file');

       // dd($file);
    // 第一引数はディレクトリの指定
    // 第二引数はファイル
    // 第三引数はpublickを指定することで、URLによるアクセスが可能となる
     $path = Storage::disk('s3')->putFile('/', $file, 'public');
    // hogeディレクトリにアップロード
      //$path = Storage::disk('s3')->putFile('/hoge', $file, 'public');
    // ファイル名を指定する場合はputFileAsを利用する
       $path = Storage::disk('s3')->putFileAs('/', $file, 'hoge.jpg', 'public');
       
       
        return redirect('/');
    }    
    
    public function research(User $user, Place $place ,Player $player)
    {
        return view('users/research')->with(['places'=>$place->get(), 'players'=>$player->get()]);
    
    }
    
    public function kensaku(Request $request)
    {
        $input = $request['user'];
        $before_colona_place=$input["before_colona_place"];
        $after_colona_place=$input["after_colona_place"];
        $users=User::where("before_colona_place",'like',$before_colona_place)
                    ->orWhere("after_colona_place",'like',$after_colona_place)
                    ->get();
                    


        return view('users/kensaku')->with(['users'=>$users]);
    }
    
    
    public function show(User $user)
    {
        
        return view('users/detail')->with(['user'=>$user]);

    }
    
    public function indexs(Request $request)
{
  $users = User::all();

 return view('users/detail')->with(['user'=>$user]);
}

    
    
    
    
     public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_index()
    {
 
        //$user = Auth::user();
 
        // ログイン者以外のユーザを取得する
        //$users = User::where('id' ,'<>' , $user->id)->get();
        // チャットユーザ選択画面を表示
        return view('users/chat_user_select');// , compact('users'));
    }

}