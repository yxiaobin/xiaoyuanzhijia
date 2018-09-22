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
         Validator::make($request->all(),[
           'title'=>'required|max:40',
           'content'=>'required',
            'img'=>'required|image',
        ],[
            'title.required'=>'标题必须填写',
            'title.max'=>'标题最大长度为40个字符',
             'content.required'=>'内容必须填写',
             'img.required'=>'必须上传图片',
             'img.image'=>'文件必须是图片格式'
         ])->validate();;
        $data = $request->except('_token');
        $img = $request->file('img');
        if($img){
            $data['img'] = $img->store('images');
        };
        $data['user_id'] = session('id');
        Story::create($data);
        session()->flash('success','发表成功！');
        return back();
    }
    public function comment($story_id,$id = 0){
        return view('home.story.comment',compact('story_id','id'));
    }
    public function commentStore(Request $request,Story $story,$id ){
        Validator::make($request->all(),[
           'content'=>'required|max:191',
        ],[
            'content.required'=>'评论必须填写',
            'content.max'=>'评论过长'
        ]);
        StoryComment::create([
            'story_id'=>$story->id,
            'father_id'=>$id,
            'user_id'=>session('id'),
            'content'=>$request->content,
        ]);
        return redirect("story/$story->id");
    }
    public function reward($user_id,$num){
        $give = Member::find(session('id'));
        $accept = Member::find($user_id);
        if($give->money < $num){
            session()->flash('danger', '您的积分不足！');
            return back();
        }
        $give->money -= $num;
        $accept->money += $num;
        Reward::create([
            'give_id'=>$give->id,
            'accept_id'=>$accept->id,
            'num'=>$num,
            'type'=>2
        ]);
        session()->flash('success', '打赏成功！');
        return back();
    }
}
