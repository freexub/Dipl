<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property integer $stat
 */
class Users extends \yii\db\ActiveRecord
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
            [['username', 'password',/* 'name', 'surname', 'patronymic', 'university_id',*/ 'email', 'stat'], 'required'],
            [['status'], 'integer'],
            [['username'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Password',
            'email' => 'Email',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'university_id' => 'Университет',
            'phone' => 'Телефон',
            'status' => 'Stat',
            'password_hash' => 'Пароль',
        ];
    }
}
