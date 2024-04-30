<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view ('login');
    }

    public function handlelogin(Request $request ){
        dd($request);
    }
}
