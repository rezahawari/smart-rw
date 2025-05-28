<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function home()
    {
        return view('pages.pengaduan');
    }
}
