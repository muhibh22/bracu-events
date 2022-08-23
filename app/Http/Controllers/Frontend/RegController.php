<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function index(){
        return view('frontend.reg');
    }
    public function register(Request $request){
        $request->validate([
            'name'=> 'required',
            'student_id'=> 'required|unique:student',
            'birthday'=>'required',
            'email'=> 'required|email|unique:student',
            'gender'=> 'required',
            'password'=> 'required',
            'subject'=> 'required'
        ]);
        $s=new student;
        $s->name=$request['name'];
        $s->student_id=$request['student_id'];
        $s->email=$request['email'];
        $s->gender=$request['gender'];
        $s->dob=$request['birthday'];
        $s->password=$request['password'];
        $s->department=$request['subject'];
        $save=$s->save();
        if($save){
            return back()->with('success', 'New student account created');
        }
        else{
            return back()->with('fail', 'Something went wrong'); 
        }
    }
}
