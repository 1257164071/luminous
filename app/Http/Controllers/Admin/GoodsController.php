<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carousel;
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
        ]);


        die;
    }
}
