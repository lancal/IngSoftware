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
    /*public function index()
    {
        return view('home');
    }*/

    //public function home(Request $request)

    public function index()
    {
        //$request->user()->authorizeRoles(['user', 'admin']);
        return view('home');
    }

    public function index2()
    {
        //$request->user()->authorizeRoles(['user', 'admin']);
        return view('home2');
    }

    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */

}
