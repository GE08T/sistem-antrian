<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\DaftarDinasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftar-dinas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_kategori_plyn') ?>

    <?= $form->field($model, 'id_role') ?>

    <?= $form->field($model, 'jam_buka_dinas') ?>

    <?= $form->field($model, 'jam_tutup_dinas') ?>

    <?php // echo $form->field($model, 'nama_dinas') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'provinsi') ?>

    <?php // echo $form->field($model, 'kabupaten_kota') ?>

    <?php // echo $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'desa') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'jam_buka_antrian') ?>

    <?php // echo $form->field($model, 'jam_tutup_antrian') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
