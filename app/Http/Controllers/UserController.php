<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Logout()
    {
        return view('pages.panel');
    }

    public function showLogin()
    {
        return view('Pages.login');
    }
}
