<?php

use yii\helpers\Html;
use yii\helpers\arrayHelper;
use app\models\base\daftarDinas;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\Layanan */ 
/* @var $form yii\widgets\ActiveForm */
?>

<div class="layanan-form">

    <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'id_dinas')->dropDownList(
                arrayHelper::map(daftarDinas::find()->all(),'id','nama_dinas',),['prompt' => 'Pilih Dinas'],
            ) ?>

            <?= $form->field($model, 'nama_layanan')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'max_antrian')->textInput() ?>

            <?= $form->field($model, 'kode_antrian')->textInput(['maxlength' => true]) ?>
        </div>

        
        <span><?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?></span>
        
    <?php ActiveForm::end(); ?>

</div>
