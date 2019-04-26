<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $Users = User::all();
        return view('Admin/Users/Index')->with('Users', $Users);
    
    }

    public function Edit($ID){
        $User = User::whereId($ID)->first();
        $Roles = Role::all();
        $SelectedRoles = $User->roles()->pluck('name')->toArray();
        return view('Admin/Users/Edit')->with('User', $User)->with('Roles', $Roles)->with('SelectedRoles', $SelectedRoles);
    }

    public function Update($ID, UserEditFormRequest $Request){
        $User = User::whereId($ID)->first();
        $User->name = $Request->input('Name');
        $User->email = $Request->input('Email');
        $Password = $Request->input('Password');

            if($Password != ''){
                $User->password = Hash::make($Password);
            }

        $User->save();

        $User->syncRoles($Request->input('Role'));

        return redirect(action([UsersController::class, 'Edit'], $User->id) )->with('status', 'User has been updated');
    }
}
