<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupporterController extends Controller
{
  public function index(Supporter $Supporter)
  {
  return view('supporters/index');
}
}
