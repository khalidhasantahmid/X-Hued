<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class create extends Controller
{
	/**
	 * 
	 */
    public function index()
    {
    	return view('create', ['loggedUser' => session('loggedUser')]);
    }
}
