<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function about()
    {
        return view("about");
    }

    public function projects()
    {
        return view("projects");
    }

    public function photos()
    {
        return view("photos");
    }
}
