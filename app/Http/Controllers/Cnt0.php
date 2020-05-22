<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;

class Cnt0 extends Controller {
    public function index() {
        $Orders = orders::where([
            ['name' , '=' , 'amir'],
            ['email' , '=' , 'khalili']
        ])->get();
        return view('welcome' , ["Data" => $Orders]);
    }

    public function aboutUs() {
        return view("aboutUs");
    }
}
