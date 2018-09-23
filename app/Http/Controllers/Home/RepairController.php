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
            'img'=>'required|image',
            'detail'=>'required|max:191',
        ],[
            'address.required'=>'小稷提醒：地址必须填写哦！',
            'address_detail.required'=>'小稷提醒：详细地址必须填写哦！',
            'object.required'=>'小稷提醒：物品必须填写哦！',
            'img.required'=>'小稷提醒：必须上传图片哦!',
            'img.images'=>'小稷提醒：上传的文件必须是图片格式',
            'detail.required'=>'小稷提醒：详情必须填写哦！',
        ])->validate();;
        $data = $request->except('_token');
        $img = $request->file('img');
        if($img){
            $data['img'] = $img->store('images');
        }
        $data['user_id'] = $id;
        $repair = Repair::create($data);
        $msg = "小稷提醒：亲爱的同学，您在 {$repair->created_at} 报修的 {$repair->address} 的 {$repair->object} 请求我们已经收到！";
        Message::create([
            'user_id'=>$id,
            'message'=>$msg
        ]);
        session()->flash('success', '小稷提醒：感谢您的报修成功，请等待回复！');
        return back();
    }
}
