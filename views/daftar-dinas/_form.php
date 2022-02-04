<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\arrayHelper;
use app\models\base\kategoriPelayanan;

/* @var $this yii\web\View */
/* @var $model app\models\base\DaftarDinas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftar-dinas-form">

    <?php $form = ActiveForm::begin(
        ['options' => ['enctype' => 'multipart/form-data']]
    ); ?>
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'id_kategori_plyn')->dropDownList(
                    arrayHelper::map(kategoriPelayanan::find()->all(),'id','nama_kategori',),['prompt' => 'Pilih Kategori'],
                ) ?>
            </div>
            
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'id_role')->textInput() ?>
            </div>
            
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'nama_dinas')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'jam_buka_dinas')->timeInput() ?>
            </div>
            
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'jam_tutup_dinas')->textInput() ?>
            </div>
            
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'jam_buka_antrian')->textInput() ?>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <?= $form->field($model, 'jam_tutup_antrian')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($model, 'kabupaten_kota')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($model, 'desa')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($model, 'alamat')->textarea(['rows' => 5]) ?>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <?= $form->field($model, 'fotoFile')->fileInput() ?>
            </div>
        </div>
        
        <span><?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?></span>

    <?php ActiveForm::end(); ?>

</div>
