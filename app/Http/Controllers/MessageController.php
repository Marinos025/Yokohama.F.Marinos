<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
public function index(Message $message)
 {
return view('messages/index');
}
}
