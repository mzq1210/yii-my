<?php

namespace backend\assets;

use yii\web\AssetBundle;

class HuiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'h-ui/css/bootstrap.min14ed.css?v=3.3.6',
        'h-ui/css/font-awesome.min93e3.css?v=4.4.0',
        'h-ui/css/animate.min.css',
        'h-ui/css/style.min862f.css?v=4.1.0'
    ];
    public $js = [
        'h-ui/js/jquery.min.js?v=2.1.4',
        'h-ui/js/bootstrap.min.js?v=3.3.6',
        'h-ui/js/plugins/metisMenu/jquery.metisMenu.js',
        'h-ui/js/plugins/slimscroll/jquery.slimscroll.min.js',
        'h-ui/js/plugins/layer/layer.min.js',
        'h-ui/js/hplus.min.js?v=4.1.0',
        'h-ui/js/contabs.min.js',
        'h-ui/js/plugins/pace/pace.min.js'
    ];

    public $depends = [

    ];
}
