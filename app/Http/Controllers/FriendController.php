<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;
use Auth;
use DB;

class FriendController extends Controller
{
    public function getstatus($id)
    {
    	if(DB::table('friends')->where(['User1','=','$id'],['User2','=','Auth::id()'])->orwhere(['User1','=','Auth::id()'],['User2','=','$id'])->exists())
    	{
    		$friend = Friend::select('User1','User2','status')->where(['User1','=','$id'],['User2','=','Auth::id()'])->orwhere(['User1','=','Auth::id()'],['User2','=','$id'])->get();
    		var_dump($friend);
    	}
    	else
    	{
    		echo "No record exist";
    	}
    }
}
