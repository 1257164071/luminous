@extends('admin.layouts.session')
@section('title','登录')
@section('content')
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h2>LOGO</h2>
            </div>
            <h3>欢迎使用</h3>

            <form class="m-t" role="form" action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input class="form-control" name="email" placeholder="用户名" value="{{ old('account') }}" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
    </div>
@stop
