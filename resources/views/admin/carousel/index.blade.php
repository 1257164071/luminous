@extends('admin.layouts.content')
@section('title','角色管理')

@section('content')
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">角色管理</h3>
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
            "{{ route('admin.carousel') }}", [
                {
                    field: 'id',
                    title: 'ID',
                    width: '100px',
                    align: 'center',
                }, {
                    field: 'remark',
                    title: '备注',
                    align: 'center',
                    width: '200px',
                }, {
                    field: 'date',
                    title: '创建时间',
                    align: 'center',
                }, {
                    field: 'operate',
                    title: '操作',
                    align: 'center',
                    width: '200px',
                    formatter: function (value, row, index) {
                        return [
                            '<button class="btn btn-outline btn-default" onclick="">编辑</button>',
                            '<button class="btn btn-outline btn-danger">删除</button>',
                        ].join('  ')
                    } //自定义方法，添加操作按钮
                },
            ]);

        $("#add").on('click',function () {
            window.location.href = "{{ route('admin.carousel.add') }}"
        })
    </script>
@stop
