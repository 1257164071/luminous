<?php

namespace App\Http\Controllers\Index;

use App\Models\Carousel;
use App\Models\Goods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        $carousels = Carousel::orderBy('sort','asc')->get();
        $goods = Goods::orderBy('goods_stars','desc')->take(20)->get();
        return view('index.index.index',compact('carousels','goods'));
    }

}
