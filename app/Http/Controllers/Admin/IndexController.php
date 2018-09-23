<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }
    public function check(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);
        if ($request->username == config('xyzj.username') && $request->password == config('xyzj.password')){
            session(['admiun'=>1]);
            return redirect('admin/index');
        }else{
            session()->flash('danger','用户名密码错误！');
            return back();
        }
    }
    public function logout(){
        session(['admin'=>'']);
        session()->flash('success','注销成功！');
        return redirect('admin/index');
    }
}
