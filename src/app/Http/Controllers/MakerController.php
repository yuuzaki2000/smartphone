<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakerController extends Controller
{
    //
    public function index(){
        return view('maker_carrier_register');
    }
}
