<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testuser;
use Illuminate\Support\Facades\DB;

class TestUserController extends Controller
{
    public function user(Request $request){
        $testuser = testuser::all();
        return view('test.user',['testuser'=>$testuser]);
    }

     public function add(){
        return view('test.create');
    }

    public function store(Request $request){
       $store = $request->only(['firstname','lastname','email']);
       testuser::create($store);
        $testuser = testuser::all();
        return view('test.user',['testuser'=>$testuser]);
    }

    public function edit($id){
        $testuser = testuser::find($id);
        return view('test.edit',['testuser'=>$testuser]);
    }
    public function update(Request $request){
       
        $firstname = $request->e_firstname;
        $lastname = $request->e_lastname;
        $email = $request->e_email;
        testuser::where('id',$request->id)->update(['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email]);

        $testuser = testuser::all();
        return view('test.user',['testuser'=>$testuser]);
    }

     public function delete($id){
        DB::delete("delete from testusers where id=?",[$id]);

        $testuser = testuser::all();
        return view('test.user',['testuser'=>$testuser]);
    }
}
