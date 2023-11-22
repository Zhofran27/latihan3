<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    function index(){
        return view('guru.index');
    }
}
