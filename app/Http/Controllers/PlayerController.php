<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(Player $player)
    {
        return view('players/index');
    }
 }
