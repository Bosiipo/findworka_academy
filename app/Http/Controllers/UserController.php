<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postRegister(Request $request)
    {

        $user = new User;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = \Hash::make($request['password']);
        $user->privilege_id = 3;

        $user->save();
    }
}
