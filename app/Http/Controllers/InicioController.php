<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        //$request->user()->authorizeRoles(['user', 'admin']);
        return view('home');
    }
}
