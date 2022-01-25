<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

  $this->title = 'Register';
  $this->params['breadcrumbs'][] = $this->title;
?>

<div class="jumbotron">  
  <div class="register-box">
    <div class="card card-outline card-primary" style="margin-top: 10rem;">
      <div class="card-header"><h2 style="text-align: left;">Register</h2></div>
        <div class="card-body register-card-body">

        <?php $form = ActiveForm::begin([
            'id' => 'register-form',
            'enableClientValidation' => false
          ]); ?>

            <?= $form
              ->field($model, 'name')
              ->textInput(['placeholder' => $model->getAttributeLabel('nama lengkap')]) ?>

            <?= $form
              ->field($model, 'jenis_kelamin')
              ->dropDownList([ 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

            <?= $form
              ->field($model, 'alamat')
              ->textarea(['rows' => 2]) ?>
          
            <?= $form
              ->field($model, 'username')
              ->textInput(['placeholder' => $model->getAttributeLabel('masukan username')]) ?>
            
            <?= $form
              ->field($model, 'password')
              ->passwordInput(['placeholder' => $model->getAttributeLabel('masukan password')]) ?>


          <div class="form-group">
              <?= Html::submitButton('Register', ['class' => 'btn btn-primary btn-block', 'name' => 'register-button']) ?>
            </div>

        <p class="text-center mt-5">Sudah punya akun? <?= Html::a('Login', ['site/login']) ?> </p>

        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>