<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Docs */

$this->title = 'Добавление документа';
$this->params['breadcrumbs'][] = ['label' => 'Документы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload' => $model_upload,
    ]) ?>

</div>
