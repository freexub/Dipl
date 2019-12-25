<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;

$this->title = 'ДРЦУ КарГТУ';
#return $this->redirect(['account/index']);
#header('Location: account/index');
?>


<div class="site-index">
    <div class="data-view">
        <h1><?= Html::encode($user_lvl->levels->name) ?></h1>
    </div>
    <!--div class="jumbotron"-->

        <?php
        if(Yii::$app->user->can('KpUser')){
            #var_dump($result) ;die();
            echo GridView::widget([
			'dataProvider' => $dataProvider,
			#'filterModel' => $searchModel,
			'columns' => [
				#['class' => 'yii\grid\SerialColumn'],
                'indicator.sort',
                'indicator.name',

                [
                    'label' => 'Итого: '.round($itog, 2).'%',
                    #'visible' => Yii::$app->user->can('KpModerator'),
                    'format' => 'raw',
                    'options' => ['width' => '140'],
                    'value' => function ($data) {
                        if(isset($data->follow)){
                            $date_start = date('Y-m-01');
                            $date_end = date("Y-m-t");
                            $follow = $data->follow->value;

                            if(isset($data->result->point)){
                                #$point = $data->result->point;
                                $point = (int)app\models\KpData::find()->where('member_id = '.$data->id.' and data_status_id = 2 and DATE(date_add) BETWEEN "'.$date_start.'" and "'.$date_end.'"')->count();
                            }else{
                                $point = 0;
                            }

                        }else{
                            $date_start = $data->date_start;
                            $date_end = $data->date_end;
                            if(isset($data->result->point)){
                                $point = $data->result->point;
                            }else{
                                $point = 0;
                            }
                            $follow = 1;
                        }

                        $stated = $data->stated;
                        $need = $data->need;

                        if ($point > 0 && $stated == 0){
                            $persent = ($point * 100);
                        }elseif ($point >= 0 && $stated > 0 ){
                            #$point = $data->result->point;
                            $persent = sprintf("%.2f",$point / (($stated * $follow) / 100));
                        }else{
                            $point = 0;
                            $persent = 0;
                        }
                        return $persent.'%';
                    }
                ],



				#['class' => 'yii\grid\ActionColumn'],
			],
		]);
        }
        ?>

    <!--/div-->


</div>
