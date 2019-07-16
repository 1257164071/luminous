@extends('admin.layouts.child')
@section('title','增加角色')

@section('content')
    <style>
        .btn-primary {
            margin-left: 10px;
        }
    </style>
    <div class="container col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                添加轮播
            </div>
            <div class="panel-body">

                <div>
                    <form action="{{ route('admin.carousel.add') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="remark">备注:</label>
                            <input type="text" class="form-control" id="remark" name="remark" value="{{ old('remark') }}">
                        </div>
                        <div class="form-group">
                            <label for="sort">位置排序</label>
                            <input type="text" class="form-control" id="sort" name="sort" value="100">
                        </div>
                        <div class="form-group">
                            <label for="image">上传图片(1920*820)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="image_path" readonly>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary" id="image">选择图片</button>
                                </span>
                            </div>
                            <input type="file" id="file" style="display: none" name="img_file" accept=".jpg,.png">
                        </div>
                        <div class="form-group">
                            <label for="title">轮播标题:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="content">轮播内容</label>
                            <textarea class="form-control" id="content" name="content" value="{{ old('content') }}"></textarea>
                        </div>

                            <button type="button" class="btn btn-primary pull-right" id="back">返回</button>
                            <button type="submit" class="btn btn-primary pull-right">提交</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
@stop



@section('script')
    <script>
        $("#back").on('click', function (){
            window.location.href = "{{ route('admin.carousel') }}";
        });
        $("#image").on('click', function (){
            $("#file").click();
        });
        $("#file").on('change', function(){
            var file = $("#file").val();
            var fileName = file.split("\\").pop();
            $("#image_path").val(fileName)
        });
    </script>

@stop
