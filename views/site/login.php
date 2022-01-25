<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';

$field1 = [
    'options' => ['class' => 'input-group-text'],
    'inputTemplate' => "{input}<span class='fas fa-user'></span>"
];

?>
  
<div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header"><h2 style="text-align: left";>Login</h2></div>
        <div class="card-body login-card-body">

        <?php $form = ActiveForm::begin([
          'id' => 'login-form',
          'enableClientValidation' => false
        ]); ?>

          <?= $form
              ->field($model, 'username')
              ->textInput(['placeholder' => $model->getAttributeLabel('masukan username')]) ?>
          
          <?= $form
              ->field($model, 'password')
              ->passwordInput(['placeholder' => $model->getAttributeLabel('masukan password')]) ?>

          <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
          </div>

          <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
          ]) ?>

          <p class="text-center mt-5">Belum punya akun? <?= Html::a('Create Account', ['site/register']) ?></p>

        <?php ActiveForm::end(); ?>
      </div>
    </div>
</div>
