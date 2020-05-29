<?php
use mdm\admin\components\MenuHelper;
use backend\widgets\HuiMenu;

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
    $data['class'] = '';
    $return['options'] = $data;

    //没配置图标的显示默认图标
    (!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'home';
    $items && $return['items'] = $items;
    return $return;
};
$data = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback);
?>

<?= HuiMenu::widget([
    'options' => ['class' => "nav", 'id' => "side-menu"],
    'items' => $data
]) ?>