<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
}
