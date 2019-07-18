<?php

namespace App\Http\Controllers\Admin;

use App\Models\GoodsCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsCatsController extends Controller
{
    //
    public function index()
    {

        return view('admin.goodscats.index');
    }

    public function list()
    {
        $list = GoodsCat::orderBy('sort','desc')->get();
        return response()->json($list);
    }

    public function add()
    {
        return view("admin.goodscats.add");
    }

    public function add_form(Request $request)
    {
        $this->validate($request,[
            'sort'  =>  'integer',
            'goods_cat_name'    =>  'required',
        ]);
        GoodsCat::create([
            'create_date'   =>  date('Y-m-d H:i:s'),
            'goods_cat_name'=>  $request->goods_cat_name,
            'sort'          =>  $request->sort,
        ]);
        session()->flash('success', '添加成功');
        return redirect()->route('goods_cats.index');

    }

    public function destroy(GoodsCat $goodsCat)
    {
        $goodsCat->delete();
        session()->flash('success', '删除成功');
        return redirect()->route('goods_cats.index');
    }


}
