<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function register() 
  {
    return view('form');
  }
  
  public function welcome(Request, $request) 
  {
    $nama = $request["$fname, $lname"];
    return view('welcome')
  }
}
