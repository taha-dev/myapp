<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function getuser()
    {
        $user = User::find(Auth::id());
        $array = array("name" => $user->name, "dob" => $user->dob, "contact" => $user->contact, "img" => "images/profile/".$user->img);
        return $array;
    }
    public function index()
    {
        return view('home', ["user" => $this->getuser()]);
    }
   
}
