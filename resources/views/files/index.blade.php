@extends('components.base')
@section('content')
    <div class="layuimini-container">
        <div class="layuimini-main">
            123
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

        });
    </script>
@endsection
{{-- 样式 --}}
@section('styles')
    <style>
        /*查询结果标题*/
        h4 {
            font-size: 16px;
            font-family: "Microsoft YaHei", "Simsun", Arial, serif;
            font-weight: normal;
            line-height: 1;
            padding: 0;
            margin: 0;
        }

        .section {
            padding: 20px;
        }

        .section h4 span {
            color: #0084e9;
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
