<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Searching;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FindGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items['find'] = Searching::where('type',2)->orderBy('created_at','desc')->paginate(5);
        $items['lose'] = Searching::where('type',1)->orderBy('created_at','desc')->paginate(5);
        return view('home.searching.find_goods_list',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.searching.find_goods');
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
            'find_address'=>'required',
            'item_name'=>'required',
            'item_detail'=>'required',
            'phone'=>'required',
        ],[
            'find_address.required'=>'请输入找到物品的地址',
            'item_name.required'=>'请输入找到物品名称',
            'item_detail.required'=>'请输入找到物品详情',
            'phone.required'=>'请输入您的联系方式',
        ]);
        if ($va->passes()){
            $data = $request->except('_token');
            $image = $request->file('item_image');
            if ($image){
                $data['item_image'] = $image->store('image');
            }
            $data['user_id'] = 1;
            $data['type'] = 2;
            Searching::create($data);
            return redirect()->route('findgoods.index');
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
