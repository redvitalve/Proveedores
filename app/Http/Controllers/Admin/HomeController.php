<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin',['only'=>'admin']);
    }

    public function index(){
        return view('admin.index');
    }

    public function userpro(){
        return view('dashboard');
    }
}
