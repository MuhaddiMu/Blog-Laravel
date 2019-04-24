<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $Users = User::all();
        return view('Admin/Users/Index')->with('Users', $Users);
        

    }
}
