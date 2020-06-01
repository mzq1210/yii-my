<?php
use yii\helpers\Url;
?>

<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">用户列表</div>
                <div class="layui-card-body">

                    <form class="layui-form layui-form-pane" id="searchForm">
                        <div class="layui-form-item mos-common-margin-bottom10">
                            <div class="layui-inline mos-common-margin-bottom0 mos-common-margin-right0">
                                <label class="layui-form-label">用户名</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="username" class="layui-input">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item mos-common-margin-bottom0">
                            <div class=" mos-common-margin-left0">
                                <button type="submit" class="layui-btn" id="submitButton">搜索</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                <a lay-href="<?= Url::to(['signup']) ?>" class="layui-btn">添加用户</a>
                                <button class="layui-btn layui-btn-primary" title="刷新"><i class="layui-icon layui-icon-refresh-3"></i></button>
                            </div>
                        </div>
                    </form>

                    <table class="layui-table"
                           lay-data="{url:'<?= Url::to(['index']) ?>', id:'test3',toolbar:true, defaultToolbar: ['filter'],page:true}"
                           lay-filter="test3">
                        <thead>
                        <tr>
                            <th lay-data="{field: 'username',  title: '用户名'}"></th>
                            <th lay-data="{field: 'avatar',  title: '头像'}"></th>
                            <th lay-data="{field: 'email',  title: '邮箱'}"></th>
                            <th lay-data="{field: 'sex', title: '性别'}"></th>
                            <th lay-data="{field: 'birthday', title: '生日'}"></th>
                            <th lay-data="{field: 'created_at', title: '注册时间'}"></th>
                            <th lay-data="{field: 'phone',  title: '手机号'}"></th>
                            <th lay-data="{field: 'qq',title: 'QQ'}"></th>
                            <th lay-data="{field: 'weixin',title: '微信'}"></th>
                            <th lay-data="{templet: '#barDemo',resize:true,fixed: 'right',width:'30%'}">操作</th>
                        </tr>
                        </thead>
                    </table>

                    <script type="text/html" id="barDemo">
                        <div class="btnsList">
                            <a lay-href="<?= Url::to(['update']) ?>?id={{d.id}}" class="layui-btn layui-btn-xs" title="修改"><i class="layui-icon layui-icon-edit"></i> 修改</a>
                            <a href="javascript:;" class="layui-btn layui-btn-xs layui-btn-danger" lay-event="del"><i class="layui-icon layui-icon-delete"></i> 删除</a>
                        </div>
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function () {
        layui.use(['jquery','table'], function () {
            var $ = layui.jquery;
            var table = layui.table;

            //监听单元格编辑
            table.on('tool(test3)', function (obj) {
                var data = obj.data; //获得当前行数据
                var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
                if (layEvent === 'del') {
                    layer.confirm('确定要删除吗？', function (index) {
                        $.ajax({
                            url: '<?= Url::to(['delete']) ?>',
                            data: {id: data.id},
                            success: function () {
                                table.reload('test3')
                            }
                        });
                        layer.close(index);
                    });
                }
            });

            $("#searchForm").submit(function () {
                doSearch();
                return false;
            });

            $("#submitButton").click(function () {
                doSearch();
                return false;
            });

            function doSearch() {
                table.reload('test3', {
                    where: {
                        name: $("input[name=username]").val()
                    }
                });
            }
        });
    }
</script>