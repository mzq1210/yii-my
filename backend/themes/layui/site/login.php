<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登入 - layuiAdmin</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/layuiadmin/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/layuiadmin/style/admin.css" media="all">
    <link rel="stylesheet" href="/layuiadmin/style/login.css" media="all">
</head>
<body>

<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
    <form action="<?= Url::to(['site/login']); ?>" method="post">
    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>layuiAdmin</h2>
            <p>layui 官方出品的单页面后台管理模板系统</p>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
                <input type="text" name="LoginForm[username]" lay-verify="required|LoginForm[username]" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                <input type="password" name="LoginForm[password]" lay-verify="required|LoginForm[password]" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
            </div>
            <input type="hidden" name="<?= Html::encode(Yii::$app->request->csrfParam); ?>" value="<?= Html::encode(Yii::$app->request->getCsrfToken()); ?>">

            <div class="layui-form-item">
                <button type="submit" class="layui-btn layui-btn-fluid" >登 入</button>
            </div>
        </div>
    </div>
</div>

<script src="/layuiadmin/layui/layui.js"></script>
</body>
</html>