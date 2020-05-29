<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_backend_log".
 *
 * @property int $id
 * @property string $route
 * @property string|null $description
 * @property int $created_at
 * @property int $user_id
 */
class UserBackendLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_backend_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['created_at'], 'required'],
            [['created_at', 'user_id'], 'integer'],
            [['route'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'route' => 'Route',
            'description' => 'Description',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
        ];
    }
}
