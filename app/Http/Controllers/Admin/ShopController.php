<?php

namespace App\Http\Controllers\Admin;

use App\Models\Good;
use App\Models\UserGood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $goods = Good::all();
        return view('admin.goods.index')->with(['goods'=>$goods,'tab'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $goods = Good::all();
        return view('admin.goods.index')->with(['goods'=>$goods,'tab'=>2]);

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
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:40',
            'img'=>'required|image',
            'price'=>'required|numeric',
            'address'=>'required',
            'num'=>'required|numeric',
            'content'=>'required',
        ]);
        if ($validator->fails()) {
            $request->session()->flash('tab', '2');
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        $request->image = $request->file('img')->store('images');  //有bug
        Good::create($request->except(['_token']));
        return $this->create();
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
    public function edit(Good $good)
    {
        //
        return view('admin.goods.edit')->with(['good'=>$good]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Good $good)
    {
        //
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:40',
            'img'=>'nullable|image',
            'price'=>'required|numeric',
            'address'=>'required',
            'num'=>'required|numeric',
            'content'=>'required',
        ]);
        if ($validator->fails()) {
            $request->session()->flash('tab', '2');
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        $img = $request->file('img');
        if ($img){
            $good->img = $img->store('images');
        }
        $good->name = $request->name;
        $good->price = $request->price;
        $good->address = $request->address;
        $good->num = $request->num;
        $good->content = $request->content;
        $good->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Good $good)
    {
        $good->user_goods()->delete();
        $good->delete();
        return back();
    }
    public function goodChange(Good $good){
        $good ->show = $good->show ? 0 : 1;
        $good->save();
        return back();
    }
    public function record(){
        $records =  UserGood::orderBy('status','ASC')->orderBy('updated_at','DESC')->get();
        return view('admin.goods.record')->with(['records'=>$records]);
    }
    public function recordChange(UserGood $record){
        $record ->status = $record->status ? 0 : 1;
        $record->save();
        return back();
    }
}
