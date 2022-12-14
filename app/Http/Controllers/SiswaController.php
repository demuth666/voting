<?php

namespace App\Http\Controllers;

use App\Models\Calons;
use Illuminate\Http\Request;

class SiswaController extends Controller
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

        $kandidat = Calons::all();

        return view('vote.index', compact('kandidat'));
    }
}
