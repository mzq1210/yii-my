<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '呵呵哒 - 登录';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>呵呵哒 - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/h-ui/css/bootstrap.min.css" rel="stylesheet">
    <link href="/h-ui/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/h-ui/css/style.min.css" rel="stylesheet">
    <link href="/h-ui/css/login.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>呵呵哒</h1>
                </div>
                <div class="m-b"></div>
                <h4>欢迎使用 <strong>呵呵哒 后台主题UI框架</strong></h4>
                <ul class="m-b">
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势一</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势二</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势三</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势四</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势五</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-5">

            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
                <h4 class="no-margins">登录：</h4>
                <p class="m-t-md">登录到呵呵哒后台主题UI框架</p>

                <?= $form
                    ->field($model, 'username', $fieldOptions1)
                    ->label(false)
                    ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

                <?= $form
                    ->field($model, 'password', $fieldOptions2)
                    ->label(false)
                    ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

                <?= Html::submitButton('登录', ['class' => 'btn btn-success btn-block', 'name' => 'sign in']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            &copy; 2099 All Rights Reserved
        </div>
    </div>
</div>
</body>
</html>
