<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homeindex () {
        return view ('pages.pages-home');
    }
}
