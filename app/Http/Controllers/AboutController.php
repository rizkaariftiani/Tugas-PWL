<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
	public function comment(){
		Cache::remember('comment', 5, function(){
			return Comment::all();

		});
		$comment = Cache::get('comment');
		return view('About')->with(compact('comment'));
	}
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
}
