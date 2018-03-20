<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AddUserController extends Controller
{
    public function indexAddUser()
    {
        return view('addUser');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string'
        ]);
        $request['password'] = bcrypt($request['password']);
        $user = User::create($request->all());

    }
}
