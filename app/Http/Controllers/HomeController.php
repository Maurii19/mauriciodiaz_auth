<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\VerifyEmail;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getProfile(){
        return view('profile');
    }

    public function updatePerfil(Request $request) {
       $user = User::find($request->input('id'));
       $user->name = $request->input('name');
       $user->email = $request->input('email');

       $user->save();

       return view('profile');
      
    }
    public function getMensajes(){
        return view('message.index');
    }

    public function sendMessage(){
        return view('message.create');
    }

}
