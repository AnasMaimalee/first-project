<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bed;




class GalleryController extends Controller
{
    
    public function index(){
        $beds = Bed::inRandomOrder()->take(8)->get();
        return view('gallery')->with('beds', $beds);
    }
}
