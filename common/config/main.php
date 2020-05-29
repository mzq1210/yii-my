<?php
return [
    // 配置语言
    'language'=>'zh-CN',
    // 配置时区
    'timeZone'=>'Asia/Chongqing',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        "authManager" => [
            "class" => 'yii\rbac\DbManager',
        ],
    ],
];
