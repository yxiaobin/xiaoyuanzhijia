<?php

namespace App\Http\Middleware;

use App\Member;
use Closure;

class CardCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Member::find(session('id'));
        if($user->card_image){
            if ($user->status == 1){
                return $next($request);
            }else{
                session()->flash('warning','请等待后台管理员审核您的学生证！');
                return redirect('/');
            }
        }
        else{
            session()->flash('warning','请先在【我的->修改信息】上传学生证再进行操作！');
            return redirect('/editinfo');
        }
    }
}
