<?php

namespace App\Http\Controllers\Index;

use App\Models\Goods;
use App\Models\GoodsCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{

    //
    public function index(Request $request)
    {
        $where = array();
        $goods_name = $request->goods_name;

        if($goods_name != null){
            $where[] = ['goods_name','=',$goods_name];
        }
        if($request->goods_cat_id == null){
            $goods = Goods::orderBy('goods_stars','desc')->where($where)->paginate(9);
        }else{
            $goods = GoodsCat::find($request->goods_cat_id)->goods()->where($where)->orderBy('goods_stars','desc')->paginate(9);
        }
        $goods_cats = GoodsCat::orderBy('sort', 'desc')->get();

        $rand_goods = Goods::orderBy(\DB::raw('RAND()'))->take(3)->get();

        return view('index.goods.index', compact('goods', 'goods_cats', 'goods_name', 'rand_goods'));
    }

    public function info(Request $request)
    {
        if($request->exists('goods_id') == false){
            return redirect()->back();
        }
        $goods = Goods::find($request->goods_id);
        $like_goods = $goods->goods_cats->goods()->orderBy(\DB::raw('RAND()'))->take(3)->get();

        return view('index.goods.info',compact('goods', 'like_goods'));
    }
}
