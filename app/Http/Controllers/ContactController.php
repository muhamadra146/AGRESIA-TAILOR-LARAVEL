<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contactindex (){
        return view('pages.pages-contact');
    }
}
