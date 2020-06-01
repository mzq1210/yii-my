<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">新增用户</div>
                <div class="layui-card-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'options' => ['enctype' => 'multipart/form-data', 'class' => 'layui-form'],
                        'enableAjaxValidation' => true,
                        'fieldConfig' => [  //统一修改字段的模板
                            'template' => "<div class=\"layui-form-item\">{label}\n<div class=\"layui-col-md4\">{input}</div>\n <div class='layui-col-md2'>{hint}</div><div class='layui-col-md4'>{error}</div></div>",
                            'labelOptions' => ['class' => 'layui-form-label'], //修改label的样式
                            'inputOptions' => ['class' => 'layui-input'],
                            'hintOptions' => [],
                            'errorOptions' => ['class' => 'layui-form-mid', 'style' => 'margin-left:20px;color:red;'],
                        ]
                    ]); ?>

                    <?= $form->field($model, 'username')->label('登陆名')->hint('测试')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'email')->label('邮箱') ?>
                    <?= $form->field($model, 'password')->label('密码')->passwordInput() ?>

                    <div class="layui-form-item" style="margin: 0 auto;">
                        <?= Html::submitButton('添加', ['class' => 'layui-btn', 'name' => 'signup-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>