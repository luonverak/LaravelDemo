<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function homePage()
    {
        return view('home_page');
    }
    public function addPage()
    {
        return view('add_page');
    }
}
