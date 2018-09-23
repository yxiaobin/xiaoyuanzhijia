<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Searching;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FindPeopleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['HomeLoginCheck','CardCheck'])->only(['create','store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items['people'] = Searching::where('type',3)->orderBy('created_at','desc')->paginate(5);
        return view('home.searching.searchTa',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.searching.searchTa_launch');
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
        $va = Validator::make($request->input(), [
            'item_detail' => 'required',
            'phone' => 'required',
        ], [
            'item_name.required' => '小稷提醒：请输入寻人特征',
            'item_detail.required' => '小稷提醒：请输入寻人详细描述',
            'phone.required' => '小稷提醒：请输入您的联系方式',
        ]);
        if ($va->passes()) {
            $data = $request->except('_token');
            $member = Member::find(session('id'));
            if ($member->money < 20){
                $va->errors()->add('errors','您的积分不足20');
                return back()->withErrors($va);
            }
            $member->money = $member->money - 20;
            $member->update();
            $data['item_image'] = '';
            $data['find_address'] = '';
            $data['user_id'] = session('id');
            $data['item_name'] = '';
            $data['type'] = 3;
            Searching::create($data);

            return redirect()->route('findpeople.index');
        } else {
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
        $item = Searching::find($id);
        return view('home.searching.detail',compact('item'));
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
