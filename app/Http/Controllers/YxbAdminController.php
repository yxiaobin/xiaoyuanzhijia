<?php

namespace App\Http\Controllers;

use App\Member;
use App\Models\Message;
use Illuminate\Http\Request;

class YxbAdminController extends Controller
{
    //
    public  function  adminmember(){
        $pages = Member::where('status','=','0')->orderby('id','desc')->get();
        return view('yxbadmin.index',compact('pages'));
    }

    public  function  adminmemberdetail($id){
        $page = Member::find($id);
        return view('yxbadmin.adminmember',compact('page'));
    }


    public  function  memberyes($id){
        $page = Member::find($id);
        $page->status = 1;
        $page->save();

        $p  = new  Message();
        $p->message = "恭喜你，您的身份认证成功，您可以在线使用各种功能了，祝您使用愉快";
        $p->user_id = $id;
        $p->save();
        $p->message = $p->message.$p->created_at;
        $p->save();
        return redirect('/admin/index');
    }
    public  function  memberno($id){
        $page = Member::find($id);
        $page->status = 0;
        $page->card_image=null ;
        $page->save();
        $p  = new  Message();
        $p->message = "对不起，由于信息不匹配，或出现身份认证相同的情况，您的身份认证失败，现将你的学生证照片清空，请重新认证。";
        $p->user_id = $id;
        $p->save();
        $p->message = $p->message.$p->created_at;
        $p->save();
        return redirect('/admin/index');

    }
}
