<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadvalController extends Controller
{
    public function jadval()
    {
        return view('login-logout.jadval');
    }
    public function index()
    {
        return view('todo.index');
    }

}