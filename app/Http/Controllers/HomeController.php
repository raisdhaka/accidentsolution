<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;

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
        return view('home');
    }

    public function join()
    {
        $packages = Packages::all();
        return view('join', compact('packages'));
    }

    public function checkout($id)
    {
        $package = Packages::where('id', $id)->first();
        return view('checkout', compact('package'));
    }
}
