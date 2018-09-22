<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Searching;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoseGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('home.searching.lose_goods');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $va = Validator::make($request->input(), [
            'item_name' => 'required',
            'item_detail' => 'required',
            'phone' => 'required',
        ], [
            'item_name.required' => '请输入找到物品名称',
            'item_detail.required' => '请输入找到物品详情',
            'phone.required' => '请输入您的联系方式',
        ]);
        if ($va->passes()) {
            $member = Member::find(session('id'));
            if ($member->money < 20){
                $va->errors()->add('errors','您的积分不足20');
                return back()->withErrors($va);
            }
            $member->money = $member->money - 20;
            $member->update();
            $data = $request->except('_token');
            $data['item_image'] = '';
            $data['find_address'] = '';
            $data['user_id'] = session('id');
            $data['type'] = 1;
            Searching::create($data);
            return redirect()->route('findgoods.index');
        } else {
            return back()->withErrors($va);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
