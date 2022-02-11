<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\KategoriPelayanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-pelayanan-form">

    <?php $form = ActiveForm::begin(); ?>
        
        <?= $form->field($model, 'nama_kategori')->textInput(['maxlength' => true]) ?>

        <span><?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?></span>

    </div>
    <?php ActiveForm::end(); ?>

</div>
