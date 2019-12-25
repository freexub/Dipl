<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Labs */

$this->title = 'Добавление лаборатории';
$this->params['breadcrumbs'][] = ['label' => 'Лаборатории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
