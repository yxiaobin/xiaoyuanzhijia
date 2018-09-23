<?php

namespace App\Http\Controllers\Home;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaShangController extends Controller
{
    //
    public function questionDsShang(Request $request){
        $a = $request->input('a');
        $b = $request->input('b');
        $num = $request->input('num');

        $member = Member::find($a);
        if ($member->money < $num){
            session()->flash('danger', '您的积分不足！');
            return back();
        }
        $member->money = $member->money - $num;
        $member->update();

        $member = Member::find($b);
        $member->money = $member->money + $num;
        $member->update();

        session()->flash('success', '打赏成功！');
        return back();
    }
}
