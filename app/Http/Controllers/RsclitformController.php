<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RsclitformController extends Controller
{
    function form()
    {
    	return view('layouts.rsclitform');
    }
}
