<?php

use yii\helpers\Html;
use yii\helpers\arrayHelper;
use app\models\base\daftarDinas;
use yii\bootstrap4\ActiveForm;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Tambah Layanan';
?>
<div class="master-antrian-dinas">
    <div class="col-lg-12 mx-auto">

    <div class="card card-outline card-primary pb-4">
        <h2 class="d-flex justify-content-center mb-3"><?= Html::encode($this->title) ?></h2>

        <div class="justify-content-center row">
            <div class="row justify-content-center">
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
        </div>
    </div>

    </div>
</div>