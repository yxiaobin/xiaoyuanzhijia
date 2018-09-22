<?php

namespace App\Http\Controllers\Home;

use App\Member;
use App\Models\Reward;
use App\Models\Story;
use App\Models\StoryComment;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
    //
    public function index(){
        $stories = Story::all();
        return view('home.story.index',compact('stories'));
    }
    public function show(Story $story){
        return view('home.story.detail',compact('story'));
    }
    public function create(){
        return view('home.story.create');
    }
    public function store(Request $request){
        $this->validate($request,[
           'title'=>'required|max:40',
           'content'=>'required',
            'img'=>'image',
        ]);
        $data = $request->except('_token');
        $data['img'] = $request->file('img')->store('images');
        $data['user_id'] = session('id');
        Story::create($data);
        return $this->index();
    }
    public function comment($story_id,$id = 0){
        return view('home.story.comment',compact('story_id','id'));
    }
    public function commentStore(Request $request,Story $story,$id ){
        Validator::make($request->all(),[
           'content'=>'required',
        ]);
        StoryComment::create([
            'story_id'=>$story->id,
            'father_id'=>$id,
            'user_id'=>session('id'),
            'content'=>$request->content,
        ]);
        return $this->show($story);
    }
    public function reword($user_id,$num){
        $give = Member::find(session('id'));
        $accept = Member::find($user_id);
        if($give->money < $num){
            return "<script>alert('您的积分不足！');history.go(-1)</script>";
        }
        $give->money -= $num;
        $accept->money += $num;
        Reward::create([
            'give_id'=>$give->id,
            'accept_id'=>$accept->id,
            'num'=>$num,
            'type'=>2
        ]);
        return "<script>alert('打赏成功！');history.go(-1)</script>";
    }
}
