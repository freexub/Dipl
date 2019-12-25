<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LabsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Лаборатории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить лабораторию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name:ntext',
//            'parent_id',
//            'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
