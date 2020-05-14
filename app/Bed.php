<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    public function index(){
        $beds = Bed::inRandomOrder()->take(8)->get();
        return view('bed.index')->with('beds', $beds);
    }
}
