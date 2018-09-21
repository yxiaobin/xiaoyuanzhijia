<?php

namespace App\Http\Controllers\Home;

use App\Member;
use App\Models\Repair;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RepairController extends Controller
{
    //
    public function index(){
        return view('home.repair.index');
    }
    public function store(Request $request){
        $id = session('id');
        $user = Member::find($id);
        if(!$user){
            return back();
        }
        $this->validate($request,[
           'address'=>'required',
            'address_detail'=>'required',
            'object'=>'required',
            'img'=>'image',
            'detail'=>'required|max:191',
        ]);
        $data = $request->except('_token');
        $img = $request->file('img');
        $data['img'] = $img->store('images');
        $data['id'] = $id;
        Repair::create($data);
        return "<script>alert('保修成功，请等待回复！');history.go(-1)</script>";
    }
}
