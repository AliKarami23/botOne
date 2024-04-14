<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        User::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

    public function list()
    {
        $users = User::paginate(10);

        return view('lists.admin_list', ['users' => $users]);
    }

    public function showForm()
    {
        return view('pages.add_admin');
    }
}
