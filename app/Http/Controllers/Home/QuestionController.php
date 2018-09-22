<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Comment;
use App\Http\Model\Question;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Question::orderBy('created_at')->get();
        return view('home.question.question_list',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.question.askquestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $va = Validator::make($request->input(),[
            'title'=>'required',
            'detail'=>'required',
        ],[
            'title.required'=>'请输入问题详细描述',
            'detail.required'=>'请输入一句话概括'
        ]);
        if ($va->passes()){
            $data = $request->except('_token');
            $data['user_id'] = \session('id');
            Question::create($data);
            $member = Member::find(\session('id'));
            $member->money = $member->money - 20;
            $member->update();
            return redirect()->route('question.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comments = Comment::where('question_id',$id)->orderBy('created_at','asc')->get();
        $question = Question::find($id);
        return view('home.question.detail',compact('question','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
