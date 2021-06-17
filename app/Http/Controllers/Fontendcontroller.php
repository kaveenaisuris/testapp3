<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fontendcontroller extends Controller
{
    public function indexaboutus(){
        return view('aboutus');
    }
}
