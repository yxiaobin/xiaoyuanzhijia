<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use App\Models\Message;
use App\Models\Repair;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RepairController extends Controller
{
    //
    public function index(){
        $repairs = Repair::all();
        return view('admin.repair.index')->with(['repairs'=>$repairs]);
    }
    public function status(Repair $repair,$status){
        if($status ==1){
           $msg = "亲爱的同学，您在 {$repair->created_at} 报修的 {$repair->address} 的 {$repair->object} 问题已经修好，感谢您的报修，奖励您50积分，特此通知！";
            $user = Member::find($repair->user_id);
            $user->score += 50;
            $user->save();
        }else if($status ==- 1){
            $msg = "对不起，您在 {$repair->created_at} 报修的 {$repair->address} 的 {$repair->object} 未发现问题，再次虚假报修会受到警告，如有问题请联系17853315487杨。";
        }else{
            return back();
        }
        $repair->status = $status;
        $repair->save();
        Message::create([
            'user_id'=>$repair->user_id,
            'message'=>$msg,
        ]);
        return back();
    }
}
