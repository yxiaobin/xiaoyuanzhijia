<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $question_id = $request->input('question_id');
        $comment_id = $request->input('comment_id');
        return view('home.question.comment',compact('question_id','comment_id'));
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
            'content'=>'required',
        ],[
            'content.required'=>'请输入回复的内容！'
        ]);
        if ($va->passes()){
            $data = $request->except('_token','comment_id');
            $data['user_id'] = 1;
            if ($request->input('comment_id')){
                $data['father_id'] = $request->input('comment_id');
            }else{
                $data['father_id'] = 0;
            }
            $data['question_id'] = $request->input('question_id');
            Comment::create($data);
            return redirect()->route('question.show',$request->input('question_id'));
        }else{
            return back()->withErrors($va);
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
