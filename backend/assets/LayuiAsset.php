<?php

namespace backend\assets;

use yii\web\AssetBundle;

class LayuiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'layuiadmin/layui/css/layui.css',
        'layuiadmin/style/admin.css'
    ];
    public $js = [
        'layuiadmin/layui/layui.js'
    ];

    public $depends = [

    ];
}
