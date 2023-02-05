@extends('components.base')
@section('content')
    <div class="layuimini-container">
        <div class="layuimini-main">
            <!-- 分左右 -->
            <div class="layui-row layui-col-space10">
                <!-- 左边信息填写 -->
                <div class="layui-col-md4">
                    <!-- 表单 -->
                    <form class="layui-form layui-form-pane">
                        <!-- 输入名称 -->
                        <div class="layui-form-item">
                            <label class="layui-form-label">电影名称</label>
                            <div class="layui-input-inline">
                                <input
                                    type="text" name="moviename"
                                    lay-verify="required"
                                    placeholder="请输入"
                                    autocomplete="off"
                                    class="layui-input"
                                >
                            </div>
                            <button type="button" class="layui-btn layui-btn-radius">查找</button>
                        </div>
                    </form>
                    <!-- 查询结果展示 -->
                    <div class="section">
                        <h4>
                            <span>查询结果</span>
                        </h4>
                        <!-- 表格 -->
                        <hr>
                        <table class="layui-hide" id="result" lay-filter="resultTableFilter"></table>

                    </div>
                </div>
                <!-- 中间预览 -->
                <div class="layui-col-md4">
                    111
                </div>
                <!-- 右边 -->
                <div class="layui-col-md4">
                    预览
                </div>
            </div>


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
            table.render({
                elem: '#result',
                text: {
                    none: '没有查找到数据'
                },
                loading: true,
                url: '/api/table',
                cols: [[
                    {type: "radio", width: 50, align: 'center'},
                    {
                        field: 'name',
                        width: 250,
                        title: '名称',
                        templet(data) {
                            return `<a>${data.name}</a>`;
                        }
                    },
                    {field: 'release_date', width: 135, title: '发行年份', sort: true},
                ]],
                height: 550,
                //

                page: {
                    layout: ['count', 'prev', 'page', 'next'],
                    limit: 15,
                },
                skin: 'line',
                done(result, current, total) {
                    // 渲染完成后的回调

                }
            });
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
