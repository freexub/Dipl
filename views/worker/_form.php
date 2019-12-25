<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'labs_id')->dropDownList($model->list,[
        'prompt' => 'Выбрать лабораторию'
    ]) ?>

    <?= $form->field($model, 'biography')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'iin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'udl_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(),['mask'=>'+7 (999) 999-99-99'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adress')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'payment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employed')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
