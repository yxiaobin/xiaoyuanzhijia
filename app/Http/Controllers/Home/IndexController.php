<?php

namespace App\Http\Controllers\Home;

use App\Member;
use App\Models\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function shop(){
        $user = Member::find(session('id'));
        $good_banners = Good::where('show',1)->orderBy('updated_at','DESC')->get();
        $goods = Good::orderBy('updated_at','DESC')->limit(4)->get();
        return view('home.shop',compact('user','good_banners','goods'));
    }
}
