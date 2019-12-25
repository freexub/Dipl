<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Docs */

$this->title = 'Редактировани документа: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Документы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="docs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload' => $model_upload,
    ]) ?>

</div>
