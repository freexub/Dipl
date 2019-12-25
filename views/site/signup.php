<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::a('Авторизация', ['site/login']) ?> / <?= Html::encode($this->title) ?></h1>
    <div class="row">
	<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
		<div class="col-lg-5">
			 <div class="form-group">
                <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
		</div>
        <div class="col-lg-5">            
            <?= $form->field($model, 'username')->textInput(['placeholder'=>'Придумайте Ваш ИИН'])->label('ИИН') ?>
            <?= $form->field($model, 'email')->textInput(['placeholder'=>'Укажите Ваш e-mail']) ?>
            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Придумайте Ваш пароль'])->label('Пароль') ?>
            <?= $form->field($model, 'retypePassword')->passwordInput(['placeholder'=>'Подтвердите Ваш пароль'])->label('Подтвердить пароль') ?>
        </div>
		<?php ActiveForm::end(); ?>
    </div>
</div>
