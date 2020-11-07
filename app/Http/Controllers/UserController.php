<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
public function edit($id){
        $user = User::find($id);
        return view('edituser',['user'=>$user]);
    }

    public function update($id, Request $request){
        $user = User::find($id);
        $user->name = $request->name;
        $user->roles = $request->roles;
        $user->save();
        return redirect('/mUser');
    }


    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/mUser');
    }
}
