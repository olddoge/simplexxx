@extends('components.base')
@section('content')
    <div class="layuimini-container">
        <div class="layuimini-main">
            {{-- 查询表单 --}}
            @include('files.components.searchForm')

            <script type="text/html" id="toolbar">
                <div class="layui-btn-container">
                    <button class="layui-btn layui-btn-normal layui-btn-sm" title="手动添加">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button class="layui-btn layui-btn-sm layui-btn-danger" title="批量删除">
                        <i class="fa fa-trash"></i>
                    </button>
                    <button class="layui-btn layui-btn-normal layui-bg-green layui-btn-sm" title="扫描失踪项">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </script>

            <table class="layui-hide" id="fileTable" lay-filter="fileTableFilter"></table>


        </div>
    </div>
@endsection
{{-- js --}}
@section('scripts')
    <script>
        layui.use(['form', 'table'], function () {
            let $ = layui.jquery,
                form = layui.form,
                table = layui.table;

            console.log(form)

            let getSearchParams = function () {
                return {
                    name: form.val('filename'),
                    filetype: form.val('filetype'),
                    category: form.val('category'),
                    status: form.val('status')
                }
            }


            table.render({
                elem: '#fileTable',
                url: '{{ route('api_filelist') }}',
                where: getSearchParams(),
                toolbar: '#toolbar',
                height: 'full-175',
                defaultToolbar: ['filter'],
                cols: [[
                    {
                        type: "checkbox",
                        width: 50
                    },
                    {
                        type: 'numbers',
                        width: 50
                    },
                    {
                        field: 'file',
                        width: 200,
                        title: '文件名'
                    },
                    {
                        field: 'name',
                        width: 200,
                        title: '文件别名'
                    },
                    {
                        field: 'category',
                        width: 120,
                        title: '分类',
                        sort: true,
                        templet(data) {
                            let category = '';
                            switch (data.category) {
                                case 1:
                                    category = '<span class="layui-badge layui-bg-nogizaka46">◢₄₆ 乃木坂46</span>';
                                    break;
                                case 2:
                                    category = '<span class="layui-badge layui-bg-sakurazaka46">◢₄₆ 櫻坂46</span>';
                                    break;
                                case 3:
                                    category = '<span class="layui-badge layui-bg-keyakizaka46">◢₄₆ 欅坂46</span>';
                                    break;
                                case 4:
                                    category = '<span class="layui-badge layui-bg-hinatazaka46">◢₄₆ 日向坂46</span>';
                                    break;
                            }
                            return category
                        }
                    },
                    {
                        field: 'extension',
                        width: 120,
                        title: '文件格式',
                        sort: true
                    },
                    {
                        field: 'status',
                        width: 100,
                        title: '状态',
                        templet(data) {
                            let status = '';
                            switch (data.status) {
                                case 1:
                                    status = '<span class="layui-badge layui-bg-green">正常</span>';
                                    break;
                                case 0:
                                    status = '<span class="layui-badge"><i class="fa fa-warning"></i>&nbsp;丢失</span>';
                                    break;
                            }
                            return status
                        }
                    },
                    {
                        title: '操作',
                        width: 200,
                        templet(data) {
                            return `<div>
                                <a class="layui-btn layui-btn-normal layui-btn-xs" title="编辑">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="layui-btn layui-btn-normal layui-btn-xs" title="确认状态">
                                    <i class="fa fa-check"></i>
                                </a>
                                <a class="layui-btn layui-btn-xs layui-btn-danger" title="删除">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>`;
                        }
                    }
                ]],
                limits: [10, 25, 50, 100],
                limit: 25,
                page: true,
                skin: 'line'
            });


            $('#btnSearch').click(function () {
                console.log(getSearchParams())
                //执行搜索重载
                table.reload('fileTable', {
                    page: {
                        curr: 1
                    }
                    , where: getSearchParams()
                }, 'data');
            });

        });
    </script>
@endsection
{{-- 样式 --}}
@section('styles')
    <style>
        .layui-bg-nogizaka46 {
            background-color: #7d2982;
        }
        .layui-bg-keyakizaka46 {
            background-color: #3ab149;
        }
        .layui-bg-sakurazaka46 {
            background-color: #f19db5;
        }
        .layui-bg-hinatazaka46 {
            background-color: #5dbee5;
        }

        /*表格去掉多余单元格*/
        .layui-table-view .layui-table[lay-skin=line] {
            border-width: 0;
        }

        .layui-table-view .layui-table {
            width: 100%;
        }

    </style>
@endsection
