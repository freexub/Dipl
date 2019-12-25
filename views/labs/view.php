<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Labs */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Лаборатории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //echo Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /*echo Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены? Вы точно хотите удалить лабораторию?',
                'method' => 'post',
            ],
        ]) */?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'fio:ntext',
//            'parent_id',
//            'active',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
