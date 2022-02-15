<?php

use yii\helpers\Html;
use yii\helpers\arrayHelper;
use yii\bootstrap4\ActiveForm;
use app\models\base\Layanan;
use app\models\base\DaftarDinas;

/* @var $this yii\web\View */
/* @var $model app\models\base\Antrian */
/* @var $form ActiveForm */
$this->title = 'Ambil Antrian';

?>
<div class="antrian">

    <?php $form = ActiveForm::begin(); ?>
    <div class="offset-lg-3 col-lg-6">
        <div class="card card-outline card-primary mx-auto">
            <div class="card-body">
                <h3 class="card-text text-center mb-4">Silahkan Mengantri Disini<i class="fas fa-users ml-3"></i></h3>

               
                <?= $form->field($model, 'id_dinas')->dropDownList(
                    arrayHelper::map(DaftarDinas::find()->all(),'id', 'nama_dinas',),['prompt' => ''],) 
                ?>

                <?= $form->field($model, 'id_layanan')->dropDownList(
                    arrayHelper::map(Layanan::find()->all(),'id', 'nama_layanan',),['prompt' => ''],) 
                ?>
    
                <div class="mt-5 card-footer text-center" style="background-color: white">
                    <?= Html::submitButton('Ambil Sekarang', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
