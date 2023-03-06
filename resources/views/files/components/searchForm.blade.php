<fieldset class="table-search-fieldset">
    <legend>搜索信息</legend>
    <div style="margin: 10px">
        <form class="layui-form layui-form-pane">
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" for="filename">文件名/别名</label>
                    <div class="layui-input-inline">
                        <input type="text" id="filename" class="layui-input" lay-filter="filename">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label" for="filetype">文件类型</label>
                    <div class="layui-input-inline">
                        <select id="filetype" lay-filter="filetype">
                            <option value="">请选择</option>
                            <option value="1">视频</option>
                            <option value="1">音乐</option>
                            <option value="1">图片</option>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label" for="category">类别</label>
                    <div class="layui-input-inline">
                        <select id="category" lay-filter="category">
                            <option value="">请选择</option>
                            <option value="1">◢₄₆ 乃木坂46</option>
                            <option value="2">◢₄₆ 櫻坂46</option>
                            <option value="3">◢₄₆ 欅坂46</option>
                            <option value="4">◢₄₆ 日向坂46</option>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label" for="status">状态</label>
                    <div class="layui-input-inline">
                        <select id="status" lay-filter="status">
                            <option value="">请选择</option>
                            <option value="1">正常</option>
                            <option value="0">丢失</option>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <button type="button" class="layui-btn layui-btn-primary" id="btnSearch">
                        <i class="fa fa-search"></i>
                        搜 索
                    </button>
                </div>
            </div>
        </form>
    </div>
</fieldset>
