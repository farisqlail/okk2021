<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Pengumuman;
use App\Models\Galeri;

class AdminController extends Controller
{
    public function index(){

        $pengumuman = Pengumuman::all();
        $galeri = Galeri::all();

        return view('admin.dashboard', compact('pengumuman', 'galeri'));
    }
}
