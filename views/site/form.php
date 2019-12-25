<?php
/**
 * Created by PhpStorm.
 * User: k.shtefan
 * Date: 10.04.2017
 * Time: 15:46
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>Вывели имя:<?=$name;?> и мыло:<?=$email?> </p>
<?php $f = ActiveForm::begin(); ?>
        <?=$f->field($form,'name');?>
        <?=$f->field($form,'email');?>
        <?=$f->field($form,'subject');?>
        <?= Html::submitButton('Отправить');?>
<?php ActiveForm::end(); ?>

