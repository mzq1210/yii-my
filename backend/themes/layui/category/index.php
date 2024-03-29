<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">数据表格的重载</div>
                <div class="layui-card-body">

                    <div class="test-table-reload-btn" style="margin-bottom: 10px;">
                        搜索ID：
                        <div class="layui-inline">
                            <input class="layui-input" name="id" id="test-table-demoReload" autocomplete="off">
                        </div>
                        <button class="layui-btn" data-type="reload">搜索</button>
                        <?= Html::a('增加分类', ['create'], [
                            'class' => 'layui-btn',
                            'id' => 'create', // 按钮的id随意
                            'data-toggle' => 'modal', // 固定写法
                            'data-target' => '#operate-modal', // 等于modal begin中设定的参数id值
                        ]) ?>
                    </div>


                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'tableOptions' => ['class' => 'layui-table'],
                        'pager' => [
                            'options' => ['class' => 'layuipage pull-right'],
                            'prevPageLabel' => '上一页',
                            'nextPageLabel' => '下一页',
                            'firstPageLabel' => '首页',
                            'lastPageLabel' => '尾页',
                            'maxButtonCount' => 5,
                        ],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'id',
                            'name',
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{update}  {delete}',
                                'header' => '操作',
                                'buttons' => [
                                    'update' => function ($url, $model, $key) {
                                        return Html::a("修改", $url, [
                                            'title' => '栏目信息',
                                            'class' => 'layui-btn layui-btn-sm layui-btn-normal',
                                            // 固定写法
                                            'data-toggle' => 'modal',
                                            'data-target' => '#operate-modal',
                                        ]);
                                    },
                                    'delete' => function ($url, $model, $key) {
                                        return Html::a('删除', $url, [
                                            'title' => '删除',
                                            'class' => 'layui-btn layui-btn-sm layui-btn-danger',
                                            'data' => [
                                                'confirm' => '确定要删除么?',
                                                'method' => 'post',
                                            ],
                                        ]);
                                    },
                                ],
                            ],
                        ],
                    ]); ?>

                </div>
            </div>
        </div>
    </div>
</div>