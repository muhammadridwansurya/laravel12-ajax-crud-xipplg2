<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin($displayName) {
        session(['displayName' => $displayName]);
        return redirect('/dashboard');
    }


    public function signout() {
        session()->flush();
        return redirect('/');
    }
}
