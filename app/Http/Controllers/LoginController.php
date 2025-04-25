<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if(!empty(session('displayName')))
            return redirect('/dashboard');
        return view('login');
    }
}
