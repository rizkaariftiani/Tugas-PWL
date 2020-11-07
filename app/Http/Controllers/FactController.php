<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactController extends Controller
{
	public function index(){
		return view('Fact');
	}

	public function __construct()
	{
		$this->middleware('auth');
	}
}
