<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of Tasks.
     */
    public function index()
    {
        return view('welcome');
    }
}

