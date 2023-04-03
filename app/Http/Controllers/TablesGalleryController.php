<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesGalleryController extends Controller
{
    function index () {
        return view ('pages.admin.gallery');
    }
}
