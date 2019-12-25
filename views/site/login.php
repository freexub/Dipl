<?php
use yii\helpers\Html;
use yii\bootstrap\Tabs;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?> <!-- / --> <?php #echo Html::a('Регистрация', ['site/signup']) ?></h1>

    <p>Пожалуйста, укажите ваши <strong>Логин</strong> и <strong>Пароль</strong>:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username')->textInput(['placeholder'=>'Введите Ваш ИИН'])->label('ИИН') ?>
            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Введите Ваш пароль'])->label('Пароль') ?>
            <?= $form->field($model, 'rememberMe')->checkbox()->label('Оставаться авторизованным') ?>
            <div style="color:#999;margin:1em 0">
                Забыли пароль?  <?= Html::a('Сбросить', ['request-password-reset']) ?>.</br>
                <!-- Вы ещё не зарегистрированны? Пройти --> <?php #echo Html::a('регистрацию', ['site/signup']) ?>.
                </div>
			<?#= Html::a('reset it', ['request-password-reset']) ?>.
            <div class="form-group">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <?php
    /*    echo Tabs::widget([
            #'position'=>Tabs::POS_LEFT,
            'encodeLabels' => false,
            'items' => [

                [
                    'label' => '<h4 style="color:red">Инструкция</h4>',
                    'content' => '<iframe name="instruction" src="http://difoplata.kstu.kz/web/uploads/instruction.pdf"
                    style="width: 600px; height: 600px;" frameborder="0">Ваш браузер не поддерживает фреймы</iframe>',
                    #'visible' => Yii::$app->user->can('ticket'),
                ],
                [
                    'label' => '<h4 style="color:#1c94c4">Сроки показателей</h4>',
                    'content' => '<embed src="http://difoplata.kstu.kz/web/uploads/indicator.pdf" width="600" height="600" 
 type=\'application/pdf\'>',
                    #'visible' => Yii::$app->user->can('ticket'),
                ],
            ]

        ]);
*/
        ?>

        </div>
    </div>
</div>
