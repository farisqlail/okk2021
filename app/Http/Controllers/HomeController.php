<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(){

        return view('index');
    }

    public function jadwal(){

        return view('jadwal');
    }
    
    public function galeriHome(){

        return view('galeri');
    }

    public function pengumumanHome(){

        return view('pengumuman');
    }

    public function tentang(){

        return view('tentang');
    }

    public function tour(){

        return view('360');
    }
}
