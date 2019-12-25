<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docs".
 *
 * @property integer $id
 * @property string $name
 * @property string $file_name
 * @property integer $active
 */
class Docs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'docs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'file_name'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['file_name'], 'string', 'max' => 50],
            [['active'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название документа',
            'file_name' => 'Ссылка на документ',
            'active' => 'Статус',
        ];
    }
}
