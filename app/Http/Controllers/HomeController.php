<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
    public function index()
    {
        if(Auth::user()->userType == 0){
            $user = Auth::user();
            return view('home', compact('user'));
        }
        else{
            return view('staff.home');
        }
        
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->courseId = $request->courseId;

        $user->save();

        return back()->withSuccess("Information updated successfully.");
    }
}
