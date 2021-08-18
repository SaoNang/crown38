<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoles extends Controller
{
    
    public function UserRolesIndex(){
        return view('UserManagement.UserRoles');
    }
}
