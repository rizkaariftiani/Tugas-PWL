<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function user($id){
        $user = User::find($id);
        return view('User', ['id'=>$id])->with(compact('user'));
        
    }
    public function manage(){
        $user = User::all();
        return view('ManageUser',['user' => $user]);
    }

    public function add()
    {
        return view('adduser');
    }

    public function create(Request $request)
    {
    if($request->file('image')){
      $image = $request->file('image')->store('images','public');
    }
       User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'roles' => $request->roles,
        'imageurl' => $image,
 ]);
       return redirect('/mUser');
   }

   public function edit($id){
    $user = User::find($id);
    return view('edituser',['user'=>$user]);
}

public function update($id, Request $request){
    $user = User::find($id);
    $user->name = $request->name;
    $user->roles = $request->roles;
    if($user->imageurl && 
        file_exists(storage_path('app/public/' . $user->imageurl)))
    {
     \Storage::delete('public/'.$user->imageurl);
 }
 $image = $request->file('image')->store('images', 'public');
 $user->imageurl = $image;
 $user->save();
 return redirect('/mUser');
}


public function delete($id){
    $user = User::find($id);
    $user->delete();
    return redirect('/mUser');
}

public function cetak_pdf(){
 $user = User::all();
 $pdf = PDF::loadview('users_pdf',['user'=>$user]);
 return $pdf->stream();
}

}
