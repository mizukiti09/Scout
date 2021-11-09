<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{

    public function create()
    {
        return view('cases.create');
    }
    
}
