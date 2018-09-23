<?php

namespace App\Http\Controllers\Home;

use App\Member;
use App\Models\Good;
use App\Models\Message;
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
        $records = $user->exchange()->orderBy('created_at','DESC')->get();
        return view('home.shop.record')->with(['records'=>$records]);
    }
    public function rule(){
        return view('home.shop.rule');
    }
    public function exchange(Good $good)
    {
        $user = Member::find(session('id'));
        if($user->money<$good->price){
            session()->flash('danger', '小稷提醒：您的积分不足哦，无法兑换！快去赚取积分吧！');
            return back();
        }
        if($good->num == 0){
            session()->flash('danger', '小稷提醒：您所兑换的商品没有库存了，换个其他的试试吧！');
            return back();
        }
        $record = UserGood::create([
            'good_id'=>$good->id,
            'user_id'=>$user->id,
            'price'=>$good->price,
            'status'=>0,
        ]);
        $user->money -= $good->price;
        $user->save();
        $good->num --;
        $good->save();
        Message::create([
            'user_id'=>$user->id,
            'message'=>"小稷提醒：您在 {$record->created_at} 兑换的【{$good->name}】请在两天内于{$good->address}兑换，逾期不候哦！"
        ]);
        session()->flash('success', '小稷提醒：兑换成功！请在2天时间内尽快去自取地点取！逾期不候哦！');
        return back();
    }
}
