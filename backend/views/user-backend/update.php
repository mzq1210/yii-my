<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->registerCssFile('@web/other/info.css',['depends'=>['backend\assets\LayuiAsset']]);
$this->registerJsFile('@web/other/info.js', ['depends' => ['backend\assets\LayuiAsset']]);
?>

<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">用户列表</div>
                <div class="layui-card-body">

<form class="layui-form" action="<?= Html::encode(Url::to(['update', 'id' => $model->id])); ?>" method="post">
    <input type="hidden" name="<?= Html::encode(Yii::$app->request->csrfParam); ?>" value="<?= Html::encode(Yii::$app->request->getCsrfToken()); ?>">
    <input type="hidden" name="UserBackend[avatar]" id="mos-my-info-avatar-hidden" value="<?= Html::encode($model->avatar); ?>">
    <div class="layui-form-item">
        <label class="layui-form-label">头像</label>
        <div class="layui-input-inline">
            <div>
                <?php if($model->avatar): ?>
                    <img src="<?php echo Html::encode($model->avatar); ?>" class="layui-circle" id="mos-my-info-avatar">
                <?php else: ?>
                    <img src="/other/avatar.png" class="layui-circle" id="mos-my-info-avatar">
                <?php endif; ?>
                <p id="mos-my-info-avatar-upload-error"></p>
            </div>
            <button type="button" class="layui-btn" id="mos-my-info-avatar-btn" lay-data="{url: '<?= Html::encode(Url::to(['public/upload'])); ?>', accept: 'images', data: {'<?php echo Html::encode(Yii::$app->request->csrfParam); ?>': '<?php echo Html::encode(Yii::$app->request->getCsrfToken()); ?>', 'file_field': 'image_file', 'file_dir': 'avatar'}, size: 100, field: 'UploadForm[image_file]'}"><i class="layui-icon layui-icon-upload"></i>上传图片</button>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">姓名</label>
        <div class="layui-input-inline">
            <input type="text" name="UserBackend[name]" class="layui-input" value="<?= Html::encode($model->truename); ?>">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">性别</label>
        <div class="layui-input-inline">
            <?php foreach($sexArr as $k => $v): ?>
                <input type="radio" name="UserBackend[sex]" value="<?= Html::encode($k); ?>" title="<?= Html::encode($v); ?>"<?php if($model->sex == $k): ?> checked="checked"<?php endif; ?>>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">生日</label>
        <div class="layui-input-inline">
            <input type="text" name="UserBackend[birthday]" id="mos-my-info-birthday" class="layui-input" readonly="readonly" value="<?= Html::encode($model->birthday); ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">手机</label>
        <div class="layui-input-inline">
            <input type="text" name="UserBackend[mobile]" class="layui-input" value="<?= Html::encode($model->phone); ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">邮箱</label>
        <div class="layui-input-inline">
            <input type="text" name="UserBackend[email]" class="layui-input" value="<?= Html::encode($model->email); ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">QQ</label>
        <div class="layui-input-inline">
            <input type="text" name="UserBackend[qq]" class="layui-input" value="<?= Html::encode($model->qq); ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">微信</label>
        <div class="layui-input-inline">
            <input type="text" name="UserBackend[weixin]" class="layui-input" value="<?= Html::encode($model->weixin); ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" type="submit">保存</button>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>