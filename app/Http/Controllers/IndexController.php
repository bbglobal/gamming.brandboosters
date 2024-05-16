<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");
    }
    public function services()
    {
        return view("services");
    }
    public function policy()
    {
        return view("privacy");
    }
    public function contact()
    {
        return view("contact");
    }
    public function portfolio()
    {
        return view("portfolio");
    }
    public function packages()
    {
        return view("packages");
    }
    public function testimonials()
    {
        return view("testimonials");
    }
    public function animation()
    {
        return view("animation");
    }
    public function comic()
    {
        return view("comic");
    }
    public function graphics()
    {
        return view("graphics");
    }
}
