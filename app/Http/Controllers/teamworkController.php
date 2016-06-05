<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class teamworkController extends Controller
{
    //
    public function index()
    {
    	# code...
    	return view('site.teamwork.index');
    }
}
