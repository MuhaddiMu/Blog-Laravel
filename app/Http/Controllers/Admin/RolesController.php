<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleFormRequest; 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function Create(){

        return view('Admin/Roles/Create');

    }

    public function Store(RoleFormRequest $Request){

        $this->validate($Request, [
            'Name' => 'required',
        ]);

        $Role = new Role;
        $Role->name = $Request->input('Name');
        $Role->save();
        return redirect('/admin/Roles/Create')->with('status', 'A new role has been created');
    }

    public function Index(){

        $Roles = Role::all();
        return view('Admin/Roles/Roles')->with('Roles', $Roles);

    }
}
