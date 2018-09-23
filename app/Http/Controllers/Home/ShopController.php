<?php

namespace App\Http\Controllers\Home;

use App\Member;
use App\Models\Good;
use App\Models\UserGood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    //
    public function goods(){
        $goods = Good::all();
        return view('home.shop.list')->with(['goods'=>$goods]);
    }
    public function goodDetail(Good $good){
        return view('home.shop.detail')->with(['good'=>$good,]);
    }
    public function exchange_record(){
        $user = Member::find(session('id'));
        $records = $user->exchange;
        return view('home.shop.record')->with(['records'=>$records]);
    }
    public function rule(){
        return view('home.shop.rule');
    }
    public function exchange(Good $good)
    {
        $user = Member::find(session('id'));
        if($user->money<$good->price){
            session()->flash('danger', '您的积分不足，无法兑换！');
            return back();
        }
        UserGood::create([
            'good_id'=>$good->id,
            'user_id'=>$user->id,
            'price'=>$good->price,
            'status'=>0,
        ]);
        $user->money -= $good->price;
        $user->save();
        session()->flash('success', '兑换成功！');
        return back();
    }
}
