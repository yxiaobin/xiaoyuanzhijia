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
            return "您的积分不足！";
        }
        $member->money = $member->money - $num;
        $member->update();

        $member = Member::find($b);
        $member->money = $member->money + $num;
        $member->update();

        return "打赏成功！";
    }
}
