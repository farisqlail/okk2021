<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
}
