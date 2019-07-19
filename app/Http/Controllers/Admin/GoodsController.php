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
            'goods_price'   =>  'max:8|integer|nullable',
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
        Goods::create($validate);
        session()->flash('success','添加成功');
        return redirect()->route('goods.index');
    }
}
