@extends('admin.layouts.content')
@section('title','商品类型管理')

@section('content')
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">商品类型管理</h3>
            </div>
            <div class="panel-body">
                <div class="example">
                    <div class="btn-group hidden-xs" id="exampleTableEventsToolbar" role="group">
                        <button type="button" class="btn btn-outline btn-default" id="add">
                            增加
                        </button>
                    </div>
                    <table id="role_table" data-height="500" data-mobile-responsive="true">
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop


@section('script')
    <script>
        window.penguin.TableRun(
            $("#role_table"),
            "{{ route('goods_cats.index') }}", [
                {
                    field: 'id',
                    title: 'ID',
                    width: '100px',
                    align: 'center',
                },{
                    field: 'sort',
                    title: '排序',
                    align: 'center',
                    width: '100px',
                }, {
                    field: 'goods_cat_name',
                    title: '类型名称',
                    align: 'center',
                }, {
                    field: 'create_date',
                    title: '创建时间',
                    align: 'center',
                    width: '200px',
                }, {
                    field: 'operate',
                    title: '操作',
                    align: 'center',
                    width: '300px',
                    formatter: function (value, row, index) {
                        var value = row;
                        return [
                            '<button class="btn btn-outline btn-default" onclick="edit(\''+row.id+'\')">编辑</button>',
                            '<button class="btn btn-outline btn-danger" onclick="del(\''+row.id+'\')">删除</button>',
                        ].join('  ')
                    } //自定义方法，添加操作按钮
                },
            ],
            function () {
                return {
                    // // limit: params.limit,   //页面大小
                    // offset: params.offset,  //页码
                    // pageSize: this.pageSize,
                    // pageNumber: this.pageNumber,
                    // projectId: $("#projectId").val(),
                    // requirement_Id: $("#requirement_Id").val(),
                    // length: 6
                    '_token' : "{{ csrf_token() }}",
                };
            }
        );

        $("#add").on('click', function () {
            window.location.href = "{{ route('goods_cats.add') }}"
        });
        function location_img(path) {
            window.penguin.imgView(path);
        }

        function edit(id) {
            window.location.href = "{{ route('admin.home')}}" + '/goods_cats/' + id + "/edit";
        }
        function del(id) {
            if(confirm('是否删除')){
                window.location.href =  "{{ route('admin.home')}}" + '/goods_cats/' + id + "/destroy";
            }
        }
    </script>
@stop
