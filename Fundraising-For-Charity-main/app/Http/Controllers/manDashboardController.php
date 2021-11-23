<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manDashboardController extends Controller
{
    public function index(Request $req)
    {
        // print_r($data[0]->title);
    return view('manager.man_dashboard');

    }
    public function Profile()
    {
        // print_r($data[0]->title);
    return view('manager.man_editprofile');

    }
}
