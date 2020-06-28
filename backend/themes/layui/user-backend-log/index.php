<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'User Backend Logs';
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
                    </div>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
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
                            'route',
                            'description:ntext',
                            'created_at',
                            'user_id',

                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{update}  {delete}',
                                'header' => '操作',
                                'buttons' => [
                                    'update' => function ($url, $model, $key) {
                                        return Html::a("信息", $url, [
                                            'title' => '栏目信息',
                                            // btn-update 目标class
                                            'class' => 'layui-btn layui-btn-sm layui-btn-normal',
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

