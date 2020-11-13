<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisionController extends Controller
{


    public function index()
    {
        return view('mision.index');
    }


}
