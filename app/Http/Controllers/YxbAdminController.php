<?php

namespace App\Http\Controllers;

use App\Member;
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
        return redirect('/admin/index');
    }
    public  function  memberno($id){
        $page = Member::find($id);
        $page->status = 0;
        $page->save();
        return redirect('/admin/index');

    }
}
