<?php

namespace App\Http\Controllers\Index;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        $carousels = Carousel::orderBy('sort','asc')->get();



        return view('index.index.index',compact('carousels'));
    }

}
