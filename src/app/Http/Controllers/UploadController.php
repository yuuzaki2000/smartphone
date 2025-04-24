<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function store(Request $request){
        $request->file('file')->store('test');
        return redirect('/smartphone');
    }
}
