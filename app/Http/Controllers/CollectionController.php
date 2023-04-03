<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    function collectionindex () {
        return view('pages.pages-collection');
    }
}
