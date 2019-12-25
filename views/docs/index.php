<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Документы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить документ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name:ntext',
            [
                'attribute'=> 'name',
				'format' => 'raw',
				'label' => 'Название документа',
				'value' => function ($model) {
                    $file = '/web/uploads/file/'.$model->file_name;
					return '<a href="'.$file.'" title="Скачать '.$model->name.'">'.$model->name.'</a>';
				}
			],
//            'file_name',
//            'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
