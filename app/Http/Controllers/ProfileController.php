<?php

namespace App\Http\Controllers;


class ProfileController extends Controller
{
    public function showChangePass()
    {
        return view('Pages.change_pass');
    }
    public function showEditProfile()
    {
        return view('Pages.edit_profile');
    }
    public function Profile()
    {
        return view('Pages.profile');
    }
    public function panel()
    {
        return view('Pages.panel');
    }
}
