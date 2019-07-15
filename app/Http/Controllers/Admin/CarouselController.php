<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarouselController extends Controller
{
    //

    public function index()
    {
        return view('admin.carousel.index');
    }

    public function list()
    {

        return response()->json(Carousel::all());

    }

    public function carousel_add()
    {
        session()->flash('danger',"很抱歉，您的用户名和密码不匹配");

        return view('admin.carousel.carousel_add');
    }

    public function carousel_form()
    {

    }
}
