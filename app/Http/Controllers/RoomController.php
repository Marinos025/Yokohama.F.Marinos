<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
public function index(Room $room)
{
return view('rooms/index');
}
}
