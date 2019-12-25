<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\SwitchInput;


/* @var $this yii\web\View */
/* @var $model app\models\Cathedra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cathedra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>
    <?#= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?#= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
    <?#= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>
    <?#= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?#= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
