<?php

namespace backend\components;

use Yii;
use yii\helpers\Url;
use yii\base\Event;
use backend\models\UserBackendLog;

class AdminLog extends Event
{
    public static function write($event)
    {
        if($event->sender->className() == 'backend\models\UserBackendLog'){
            return false;
        }
        if(!empty($event->changedAttributes)) {
            $desc = '';
            foreach($event->changedAttributes as $name => $value) {
                $desc .= $name . ' : ' . $value . '=>' . $event->sender->getAttribute($name) . ',';
            }
            $desc = substr($desc, 0, -1);

            $dz = '';
            if($event->name == 'afterUpdate') {
                $dz = '修改了';
            }else if($event->name == 'afterDelete'){
                $dz = '删除了';
            }else if($event->name == 'afterInsert'){
                $dz = '添加了';
            }

            $description = Yii::$app->user->identity->username . $dz . $event->sender->className() . 'id:' . $event->sender->id . '的' . $desc;
            $route = Url::to();
            $userId = Yii::$app->user->id;
            $data = [
                'route' => $route,
                'description' => $description,
                'user_id' => $userId,
                'created_at' => time()
            ];
            $model = new UserBackendLog();
            $model->setAttributes($data);
            $model->save();
        }
    }
}