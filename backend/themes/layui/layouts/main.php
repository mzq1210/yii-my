<?php
use yii\helpers\Html;

$module = Yii::$app->controller->module;
if(isset($module) && $module->id == 'admin'){
    backend\assets\AppAsset::register($this);
}

backend\assets\LayuiAsset::register($this);

$contro = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;


$router = $contro . '/'. $action;
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head >
        <meta charset="utf-8">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?php $this->head() ?>
    </head>
    <body class="<?= $router=='site/index'? 'layui-layout-body' : '';?>">
    <?php $this->beginBody() ?>
    <div id="LAY_app">
        <div class="layui-layout layui-layout-admin">
            <?= $content ?>
        </div>
    </div>

    <?php $this->beginBlock('index') ?>
        layui.config({
            base: '/layuiadmin/' //静态资源所在路径
        }).extend({
            index: 'lib/index' //主入口模块
        }).use('index');
    <?php $this->endBlock() ?>
    <?php $this->registerJs($this->blocks['index'], \yii\web\View::POS_END); ?>

    <?php $this->endBody() ?>
    </body>
    </html>

<?php $this->endPage() ?>

