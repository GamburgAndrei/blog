<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $code
 * @property int $active
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'username', 'password'], 'required'],
            [['active'], 'integer'],
            [['email', 'username', 'password', 'auth_key', 'code'], 'string', 'max' => 50],
            [['auth_key', 'code'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [

            'email' => 'Email',
            'username' => 'Имя пользователя',
            'password' => 'Пароль',

        ];
    }
}
