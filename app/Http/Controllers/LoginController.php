<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view ('login');
    }

    public function handlelogin(Request $request ){
        $request->validate([
            'name' => ['required','alpha','min:6','max:10'],
            'email'=> ['required','email'],
            'password'=> 'required'
        ],
        [
            'name.required' => 'The User name is required!',
            'name.alpha'=> 'Usser name must be contain letters'
        ]
    );
        return $request;
    }
}
