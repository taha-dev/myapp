<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function findfriends()
    {
    	$users = User::select('id','name','img')->where('id','!=',Auth::id())->get();
    	return view('find',["list" => $users]);
    }
    public function showuser($id)
    {
    	$user = User::find($id);
        $array = array("id" => $user->id, "name" => $user->name, "dob" => $user->dob, "img" => "images/profile/".$user->img);
        return view('userprofile',["user" => $array]);
    }
}
