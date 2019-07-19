@extends('admin.layouts.child')
@section('title','商品分类管理')

@section('content')
        <style>
        .btn-primary {
            margin-left: 10px;
        }
    </style>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                商品分类管理
            </div>
            <div class="panel-body">
                <form action="{{ route('goods_cats.add') }}" method="POST">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label for="remark">类型名称:</label>
                        <input type="text" class="form-control" id="goods_cat_name" name="goods_cat_name" value="{{ old('goods_cat_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="sort">位置排序</label>
                        <input type="text" class="form-control" id="sort" name="sort" value="100">
                    </div>
                    <button type="button" class="btn btn-primary pull-right" id="back">返回</button>

                    <button class="btn btn-default pull-right" type="submit">提交</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $("#back").on('click', function (){
            window.location.href = "{{ route('goods_cats.index') }}";
        });
    </script>

@stop
