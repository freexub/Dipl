<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "labs".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 * @property integer $active
 */
class Labs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'labs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
            [['parent_id', 'active'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Лаборатория',
            'parent_id' => 'Департамент',
            'active' => 'Статус',
        ];
    }

    public function getList(){

        $items = $this->find()->select('id, name')->asArray()->where(['active'=>0])->all();
//        $items = Labs::find()->select('id, name')->asArray()->where('parent_id is not NULL')->all();
        foreach ($items as $item){
            $arr[$item['id']] = $item['name'];
        }
        return $arr;
    }

    public function getChild(){
        return $this->hasOne(Labs::className(), ['id' => 'parent_id']);
    }
}
