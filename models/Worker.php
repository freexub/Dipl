<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property integer $id
 * @property string $fio
 * @property string $position_id
 * @property string $biography
 * @property string $iin
 * @property string $udl_number
 * @property string $phone
 * @property string $adress
 * @property string $payment
 * @property string $birthdate
 * @property string $employed
 * @property integer $labs_id
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['fio', 'position_id', 'biography', 'iin', 'udl_number', 'phone', 'adress', 'payment', 'birthdate', 'employed'], 'required'],
            [['biography', 'adress'], 'string'],
            [['fio', 'phone', 'payment'], 'string', 'max' => 50],
            [['position_id'], 'string', 'max' => 150],
            [['iin'], 'string', 'max' => 12],
            [['udl_number'], 'string', 'max' => 10],
            [['birthdate', 'employed'], 'string', 'max' => 15],
            [['labs_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО сотрудника',
            'position_id' => 'Должность',
            'biography' => 'Автобиография',
            'iin' => 'ИИН сотрудника',
            'udl_number' => 'Номер удостоверения личности',
            'phone' => 'Контактный телефон',
            'adress' => 'Адрес проживая',
            'payment' => 'Расчетный счет',
            'birthdate' => 'Дата рождения',
            'employed' => 'Дата трудоустройства',
            'labs_id' => 'Лаборатория',
        ];
    }

    public function getList(){

        $items = Labs::find()->select('id, name')->asArray()->where(['active'=>0])->all();
        foreach ($items as $item){
            $arr[$item['id']] = $item['name'];
        }
        return $arr;
    }

    public function getLab(){
        return $this->hasOne(Labs::className(), ['id' => 'labs_id']);
    }
}
