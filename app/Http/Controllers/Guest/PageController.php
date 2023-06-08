<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index(){
    $trains_not_cancelled = Train::orderBy('starting_time')->where('is_cancelled', '!=', 0)->get();
    $trains_cancelled = Train::orderBy('starting_time')->where('is_cancelled', '!=', 1)->get();
    return view('home', compact('trains_not_cancelled', 'trains_cancelled'));
  }
}
