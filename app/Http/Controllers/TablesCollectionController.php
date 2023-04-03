<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesCollectionController extends Controller
{
    function index () {
        return view ('pages.admin.colletion');
    }
}
