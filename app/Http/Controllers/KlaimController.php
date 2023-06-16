<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlaimController extends Controller
{
    public function index()
    {
        return view('klaim');
    }
}
