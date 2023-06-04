<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studend;

class studendcontroller extends Controller
{
    public function student(){
        return view('student.index');
    }

    public function student_store(Request $request){
        $store = $request->only(['name','class']);
        studend::create($store);
         return view('student.index');
    }
}
