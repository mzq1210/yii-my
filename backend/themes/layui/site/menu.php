<?php
use mdm\admin\components\MenuHelper;
use backend\widgets\LayuiMenu;

$callback = function ($menu) {
    $data = json_decode($menu['data'], true);

    $items = $menu['children'];
    $return = [
        'label' => $menu['name'],
        'url' => $menu['route'],
    ];
    //visible
    isset($data['visible']) && $return['visible'] = $data['visible'];
    //icon
    isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon'];
    $data['class'] = 'layui-nav-item';
    $return['options'] = $data;

    //没配置图标的显示默认图标
    (!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'icon-home';
    $items && $return['items'] = $items;
    return $return;
};
$menu=MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback);

?>

<div class="layui-side layui-side-menu">
    <div class="layui-side-scroll">
        <div class="layui-logo">
            <span>CRM管理系统</span>
        </div>
            <?= LayuiMenu::widget([
                'options' => ['class'=>"layui-nav layui-nav-tree",'lay-shrink'=>"all",'id'=>"LAY-system-side-menu", 'lay-filter'=>"layadmin-system-side-menu"],
                'items' => $menu
            ]) ?>
    </div>
</div>