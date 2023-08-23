<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Project;
use App\Models\Setting;
use App\Models\TechStack;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view("welcome", [
            "user" => Setting::first(),
            "projects" => Project::latest()->take(6)->get(),
        ]);
    }

    public function about()
    {
        return view("about",[
            "user" => Setting::first(),
            "educations" => Education::get(),
            "experiences" => Experience::get(),
            "techstasks" => TechStack::get(),
        ]);
    }

    public function projects()
    {
        return view("projects",[
            "user" => Setting::first(),
            "projects" => Project::latest()->get(),
        ]);
    }

    public function photos()
    {
        return view("photos",[
            "user" => Setting::first(),
            "photos" => Image::latest()->get(),
        ]);
    }
}
