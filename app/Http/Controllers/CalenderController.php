<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function home()
    {
        return view('pages.kalender');
    }
}
