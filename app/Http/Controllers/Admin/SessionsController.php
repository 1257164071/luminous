<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //

    public function create()
    {
        return view('admin.sessions.login');
    }
    public function store(Request $request)
    {

        $credentials = $this->validate($request,[
            'email' =>  'required|max:255',
            'password'  =>  'required',
        ]);

        if(Auth::attempt($credentials))
        {
            session()->flash('success','登录成功');
            return redirect('admin');
        }else{
            session()->flash('danger',"很抱歉，您的用户名和密码不匹配");
            return redirect()->back()->withInput();

        }

    }
    public function destroy()
    {
        Auth::logout();
        session()->flash('success','您已成功退出!');
        return redirect('admin.login');
    }
}
