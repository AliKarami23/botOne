<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialPeopleController extends Controller
{
    public function showForm()
    {
        return view('pages.add_special_people');
    }

    public function List()
    {
        return view('lists.special_people_list');
    }
}
