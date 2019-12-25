<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cathedra */

$this->title = 'Create Cathedra';
$this->params['breadcrumbs'][] = ['label' => 'Cathedras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cathedra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        #'faculty' => $faculty,
    ]) ?>

</div>
