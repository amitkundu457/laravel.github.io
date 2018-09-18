<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class homecontroller extends Controller
{
public function index(){
  User::all();
  return view();
}


}
