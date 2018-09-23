<?php

namespace App\Http\Controllers;

use App\Http\Model\Searching;
use App\Member;
use App\Models\Message;
use App\Models\Reward;
use App\Models\Story;
use App\Models\UserGood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class YXBController extends Controller
{
    //登陆界面
    public function  login(){
        return view('yxb.login');
    }
//    注册界面
    public  function  register(){
        return view('yxb.register');
    }
//    注册逻辑
    public  function  registerstore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'school'=>'required',
            'class'=>'required',
            'stuid'=>'required|unique:member|max:11|min:11',
            'phone'=>'required',
            'password'=>'required|max:10'
        ]);
        $p = new Member();
        $p->name = $request->input('name');
        $p->school = $request->input('school');
        $p->class = $request->input('class');
        $p->stuid = $request->input('stuid');
        $p->phone = $request->input('phone');
        $p->password = $request->input('password');
        $p->password = encrypt($p->password);
        $p->image = "uploads/title3.png";
        $p->money = 50;
        $p->save();
        session(['name'=>'', 'id'=>'']);
        return  redirect('login');
    }
//    登陆逻辑
    public  function loginstore(Request $request){
        $this->validate($request,[
            'stuid'=>'required',
            'password'=>'required'
        ]);
        $user_name = $request->input('stuid');
        $password = $request->input('password'); // 输入的密码并没有加密
        if(count(Member::where('stuid','=',$user_name)->get())<1){
            echo "<script>alert('用户名或密码错误！')</script>";
            session(['name'=>'', 'id'=>'']);
            echo "<script>var t = setTimeout(function(){parent.history.back()},2);</script>";
            return ;
        }
        $member  = Member::where('stuid','=',$user_name)->get()[0];
        session(['id'=>$member->id]);
            //解密数据库的密码
        if(decrypt($member->password)==$password) {
                    session(['name'=>$member->name,'id'=>$member->id]);
                    return redirect('/');
        }else{
                echo "<script>alert('用户名或密码错误！')</script>";
                session(['name'=>'', 'id'=>'']);
                echo "<script>var t = setTimeout(function(){parent.history.back()},2);</script>";
                return;
        }
    }
//    登出逻辑
    public function  logout(){
        session(['name'=>'', 'id'=>'']);

        return redirect('/');
    }
    //我的界面
    public  function  mine(){
        $id = session('id');
        $member = Member::find($id);
        return view('yxb.mine',compact('member'));
    }
//    修改信息界面
    public  function  editinfo(){
        $id = session('id');
        if ($id == ""){
            return redirect('mine');
        }
        $member = Member::find($id);
        return view('yxb.editinfo',compact('member'));
    }
    //    修改信息逻辑
    public  function  editinfostore(Request $request){
        $this->validate($request,[
            'tag'=>'max:12'
        ]);
        $p = Member::find(session('id'));
        $p->name = $request->input('name');
        $p->class = $request->input('class');
        $p->stuid = $request->input('stuid');
        $p->tag = $request->input('tag');
        if ($request->file('image')!=null){
            $p->image = $request->file('image')->store('uploads');

        }
        if ($request->file('card_image')!=null){
            $p->card_image = $request->file('card_image')->store('uploads');
        }
        $p->save();
        return redirect('mine');
    }
//  个人中心 (心语家园的表还没有)
    public function myspace($id){
        $member = Member::find($id);
        $mystorys = Story::where('user_id','=',$id)->get();
        return view('yxb.myspace',compact('member','mystorys'));
    }
//    我的积分消费记录
    public function mymoney(){
        $id=session('id');
        $member = Member::find(session('id'));
        $r1 = UserGood::where('user_id','=',$id)->orderby('id','desc')->get();
        $r2 = Reward::where('give_id','=',$id)->orderby('id','desc')->get();
        return view('yxb.mymoney',compact('member','r1','r2'));
    }
//    我的记录
    public function myrecord(){
        $id = session('id');
        $news = Searching::where('user_id','=',$id)->orderby('id','desc')->get();
        $member = Member::find(session('id'));
        return view('yxb.myrecord',compact('news','member'));
    }
    //    我的消息
    public function mynew(){
        $id = session("id");
        $ps = Message::where('user_id','=',$id)->orderby('id','desc')->get();
        return view('yxb.mynew',compact('ps'));
    }
    //积分规则
    public  function  moneyrule(){
        return view('yxb.moneyrule');
    }
//    积分馆兑换记录
    public  function  monyrecord(){
        $id = session('id');
        $ps = UserGood::where('user_id','=',$id)->orderby('id','desc')->get();
        return view('yxb.moneyrecord',compact('ps'));
    }

    public  function  change(Searching $id){
        $id->status +=1;
        $id->status = $id->status%2;
        $id->save();
        return back();
    }

}