<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Bed;

class BedController extends Controller
{
    public function index(){
        $beds = Bed::inRandomOrder()->take(8)->get();
        return view('bed.index')->with('beds', $beds);
    }

    public function show($slug){
        $bed = Bed::where('slug', $slug)->firstOrfail();
        return view('bed.show')->with('bed', $bed);
    }
}
