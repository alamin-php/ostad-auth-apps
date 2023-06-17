<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('users.profile', ['user'=>$user]);
    }

    public function updateProfile(Request $request){
        $userId = Auth::user()->id;
        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $userUpdate = DB::table('users')->where('id', $userId)->update($data);
        return redirect()->route('user.profile');

    }
}
