<?php

namespace App\Http\Controllers\Home;

use App\Member;
use App\Models\Message;
use App\Models\Repair;
use Validator;
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
        Validator::make($request->all(),[
           'address'=>'required',
            'address_detail'=>'required',
            'object'=>'required',
            'img'=>'image',
            'detail'=>'required|max:191',
        ],[
            'address.required'=>'地址必须填写',
            'address_detail.required'=>'详细地址必须填写',
            'object.required'=>'物品必须填写',
            'img.images'=>'上传的文件必须是图片格式',
            'detail.required'=>'详情必须填写',
        ]);
        $data = $request->except('_token');
        $img = $request->file('img');
        if($img){
            $data['img'] = $img->store('images');
        }
        $data['id'] = $id;
        $repair = Repair::create($data);
        $msg = "亲爱的同学，您在 {$repair->created_at} 报修的 {$repair->address} 的 {$repair->object} 请求我们已经收到！";
        Message::create([
            'user_id'=>$id,
            'message'=>$msg
        ]);
        session()->flash('success', '报修成功，请等待回复！');
        return back();
    }
}
