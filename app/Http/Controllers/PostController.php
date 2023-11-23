<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        // dd(auth()->user()); //Sirve para autenticar un usuario
        return view('dashboard');
    }

    public function create()
    {
    }
}
