<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function updateStatus($id) {
       // Get the status
       $status = Status::find($id);

       $name = Input::get('name');
       $email = Input::get('email');

       $sql = "UPDATE status SET name= ? email= ? WHERE id= ?";
       DB::update($sql, array($uptitle, $upmessage, $status->id));

       return Redirect::to('/');
    }
}
