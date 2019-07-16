<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

    public function carousel_form(Request $request)
    {

        $this->validate($request, [
            'remark'    =>  'max:191',
            'title'     =>  'max:400',
        ]);


        $file = $request->file('img_file');
        if($file->isValid()){

            $ext = $file->getClientOriginalExtension();
            $realPath = $file->getRealPath();
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            $bool = Storage::disk('public')->put($filename, file_get_contents($realPath));
            if($bool == true){
                $path = "/storage/".$filename;
            }
        }

        $carousel = Carousel::create([
            'title'     =>  $request->title,
            'carousel_content'   =>  $request->carousel_content,
            'sort'      =>  $request->sort,
            'create_date'   =>  date('Y-m-d H:i:s'),
            'path'      =>  $path,
            'remark'    =>  $request->remark,
        ]);

        session()->flash('success', '添加成功');
        return redirect()->route('admin.carousel');
    }

    public function edit(Carousel $carousel){

        return view('admin.carousel.edit',compact('carousel'));
    }
}
