<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carousel;
use App\Models\Goods;
use App\Models\GoodsCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class GoodsController extends Controller
{
    //
    public function index()
    {
        return view('admin/goods/index');
    }

    public function list()
    {
        $lists = Goods::orderBy('id','desc')->get();
        foreach ($lists as $key => $val)
        {
             $lists[$key]['goods_cat_name'] = $lists[$key]->goods_cats->goods_cat_name;
        }
        return response()->json($lists);
    }
    public function add ()
    {
        $goodsCats = GoodsCat::all();

        return view('admin/goods/add', compact('goodsCats'));
    }

    public function add_form(Request $request)
    {


        $validate = $this->validate($request,[
            'goods_name'    =>  'max:191|required',
            'goods_stars'   =>  'max:11',
            'goods_cats_id' =>  'required',
            'goods_price'   =>  'max:1000000',
            'goods_detail'  =>  'string|nullable',
        ]);

        $file = $request->file('goods_index_img');
        if($file->isValid()){

            $ext = $file->getClientOriginalExtension();
            $realPath = $file->getRealPath();
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            $bool = Storage::disk('public')->put($filename, file_get_contents($realPath));
            if($bool == true){
                $path = "/storage/".$filename;
            }
        }
        if($path != null){
            $validate['goods_index_img'] = $path;
        }

        GoodsCat::find($validate['goods_cats_id'])->goods()->create($validate);
        session()->flash('success','添加成功');
        return redirect()->route('goods.index');
    }

    public function edit(Goods $goods)
    {
        $goodsCats = GoodsCat::all();
        return view('admin.goods.edit', compact('goods','goodsCats'));
    }

    public function update(Goods $goods,Request $request)
    {
        $validate = $this->validate($request,[
            'goods_name'    =>  'max:191|required',
            'goods_stars'   =>  'max:11',
            'goods_cats_id' =>  'required',
            'goods_price'   =>  'max:1000000',
            'goods_detail'  =>  'string|nullable',
        ]);

        $file = $request->file('goods_index_img');
        if($file->isValid()){

            $ext = $file->getClientOriginalExtension();
            $realPath = $file->getRealPath();
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            $bool = Storage::disk('public')->put($filename, file_get_contents($realPath));
            if($bool == true){
                $path = "/storage/".$filename;
            }
        }
        if($path != null){
            $validate['goods_index_img'] = $path;
        }

        $goods->update($validate);
        session()->flash('success','修改成功');
        return redirect()->route('goods.index');

    }

    public function destroy(Goods $goods)
    {
        $goods->delete();
        session()->flash('success', '删除成功');
        return redirect()->route('goods.index');
    }

}
