<?php

namespace App\Http\Controllers\Index;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    //
    public function index()
    {
        return view('index.about.index');
    }

}
