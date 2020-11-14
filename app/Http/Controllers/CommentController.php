<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        
    }
    
    public function comment($id){
        $comment = Comment::find($id);
        return view('Comment', ['id'=>$id])->with(compact('comment'));
        
    }
    public function manage(){
        $comment = Comment::all();
        return view('ManageComment',['comment' => $comment]);
    }

    public function add(){
        $this->middleware(function($request, $next){
         if(Gate::allows('manage-articles')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });

        return view('AddComment');
    }


    public function create(Request $request){
        $this->middleware(function($request, $next){
         if(Gate::allows('manage-articles')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });
        Comment::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect('/about');
    }

    public function edit($id){
        $this->middleware(function($request, $next){
         if(Gate::allows('manage-articles')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });
        $comment = Comment::find($id);
        return view('editcomment',['comment'=>$comment]);
    }

    public function update($id, Request $request){
        $this->middleware(function($request, $next){
         if(Gate::allows('manage-articles')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });
        $comment = Comment::find($id);
        $comment->title = $request->title;
        $comment->content = $request->content;
        $comment->save();
        return redirect('/mKomen');
    }


    public function delete($id){
        $this->middleware(function($request, $next){
         if(Gate::allows('manage-articles')) return $next($request);
         abort(403, 'Anda tidak memiliki cukup hak akses');
     });
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/mKomen');
    }
}
