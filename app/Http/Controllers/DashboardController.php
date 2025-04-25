<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(empty(session('displayName')))
            return redirect('/');

        return view('dashboard');
    }
}
