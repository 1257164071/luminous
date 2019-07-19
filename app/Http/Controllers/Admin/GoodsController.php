<?php

namespace App\Http\Controllers\Admin;

use App\Models\GoodsCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function add_form()
    {

    }
}
