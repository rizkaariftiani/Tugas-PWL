<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use PDF;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
  public function index($id){
    $article = Article::find($id);
    return view('Article', ['id'=>$id])->with(compact('article'));

  }

  public function manage(){
    $article = Article::all();
    return view('manage',['article' => $article]);
  }

  public function add(){
    return view('addarticle');
    $this->middleware(function($request, $next){
      if(Gate::allows('manage-articles')) return $next($request);
      abort(403, 'Anda tidak memiliki cukup hak akses');
    });
  }

  public function create(Request $request){
    if($request->file('image')){
      $image = $request->file('image')->store('images','public');
    }
    Article::create([
      'title' => $request->title,
      'content' => $request->content,
      'imageurl' => $image,
    ]);
    return redirect('/manage');

    $this->middleware(function($request, $next){
      if(Gate::allows('manage-articles')) return $next($request);
      abort(403, 'Anda tidak memiliki cukup hak akses');
    });
  }

  public function edit($id){
    $article = Article::find($id);
    return view('editarticle',['article'=>$article]);

    $this->middleware(function($request, $next){
     if(Gate::allows('manage-articles')) return $next($request);
     abort(403, 'Anda tidak memiliki cukup hak akses');
   });
  }

  public function update($id, Request $request){
    $article = Article::find($id);
    $article->title = $request->title;
    $article->content = $request->content;

    if($article->imageurl && 
      file_exists(storage_path('app/public/' . $article->imageurl)))
    {
     \Storage::delete('public/'.$article->imageurl);
   }
   $image = $request->file('image')->store('images', 'public');
   $article->imageurl = $image;

   $article->save();
   return redirect('/manage');

   $this->middleware(function($request, $next){
     if(Gate::allows('manage-articles')) return $next($request);
     abort(403, 'Anda tidak memiliki cukup hak akses');
   });
 }


 public function delete($id){
  $article = Article::find($id);
  $article->delete();
  return redirect('/manage');

  $this->middleware(function($request, $next){
   if(Gate::allows('manage-articles')) return $next($request);
   abort(403, 'Anda tidak memiliki cukup hak akses');
 });
}

public function cetak_pdf(){
 $article = Article::all();
 $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
 return $pdf->stream();

 $this->middleware(function($request, $next){
   if(Gate::allows('manage-articles')) return $next($request);
   abort(403, 'Anda tidak memiliki cukup hak akses');
 });
}


}
