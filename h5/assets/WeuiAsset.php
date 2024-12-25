<?php

namespace h5\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class WeuiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/weui/weui.min.css',
        '/weui/common.css'
    ];
    public $js = [];

    //定义按需加载JS方法，注意加载顺序在最后
    public static function addScript($view, $jsfile) {
        $view->registerJsFile($jsfile, [AppAsset::className()]);
    }

    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss($view, $cssfile) {
        $view->registerCssFile($cssfile, [AppAsset::className()]);
    }

    public $jsOptions = [
        'position'=>\yii\web\View::POS_HEAD
    ];

}
