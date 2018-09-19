<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class YXBController extends Controller
{
    //
    public function  login(){
        return view('yxb.login');
    }
    public  function  register(){
        return view('yxb.register');
    }
    public  function  registerstore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'school'=>'required',
            'class'=>'required',
            'stuid'=>'required',
            'phone'=>'required',
            'password'=>'required'
        ]);
        $p = new Member();
        $p->name = $request->input('name');
        $p->school = $request->input('school');
        $p->class = $request->input('class');
        $p->stuid = $request->input('stuid');
        $p->phone = $request->input('phone');
        $p->password = $request->input('password');
        $p->save();
        return  back();
    }
}
