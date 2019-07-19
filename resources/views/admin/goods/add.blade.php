@extends('admin.layouts.child')
@section('title','商品管理')

@section('content')
        <style>
        .btn-primary {
            margin-left: 10px;
        }
    </style>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                商品管理
            </div>
            <div class="panel-body">
                <form action="{{ route('goods.add') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label for="remark">商品名称:</label>
                        <input type="text" class="form-control" id="goods_name" name="goods_name" value="{{ old('goods_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="goods_stars">星级(根据星级排序)</label>
                        <select name="goods_stars" id="goods_stars" class="form-control" value="{{ old('goods_stars') }}">
                            <option value="">清选择</option>
                            <option value="1">1星</option>
                            <option value="2">2星</option>
                            <option value="3">3星</option>
                            <option value="4">4星</option>
                            <option value="5">5星</option>
                            <option value="6">6星</option>
                            <option value="7">7星</option>
                            <option value="8">8星</option>
                            <option value="9">9星</option>
                            <option value="10">10星</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="goods_cats_id">商品分类</label>
                        <select name="goods_cats_id" id="goods_cats_id" class="form-control" value="{{ old('goods_cats_id') }}">
                            <option value="">清选择</option>
                            @foreach($goodsCats as $goodsCat)
                                <option value="{{ $goodsCat->id }}">{{ $goodsCat->goods_cat_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="goods_index_img">展示图片(372*420)</label>
                        <input type="text" class="form-control" id="img_name" readonly>
                        <input type="file" style="display: none" id="goods_index_img" name="goods_index_img" accept=".jpg,.png">
                    </div>

                    <div class="form-group">
                        <label for="goods_price">价格(单位 $)</label>
                        <input type="text" class="form-control" id="goods_price" name="goods_price" value="{{ old('goods_price') }}">
                    </div>

                    <div class="form-group">
                        <label for="">商品介绍</label>
                        <script id="container" name="goods_detail" type="text/plain">
                        </script>

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
            window.location.href = "{{ route('goods.index') }}";
        });

        $("#img_name").on('click', function () {
            $("#goods_index_img").click();
        });

        $("#goods_index_img").on('change',function () {
            var file = $("#goods_index_img").val();
            var fileName = file.split("\\").pop();
            $("#img_name").val(fileName)
        });
    </script>
    <script type="text/javascript">
         var ue = UE.getEditor('container');
        ue.ready(function () {
            //此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
            ue.execCommand('serverparam', '_token', TOKEN);
        });
    </script>

@stop
