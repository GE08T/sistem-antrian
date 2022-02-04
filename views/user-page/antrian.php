<?php

/* @var $this yii\web\View */

use\yii\helpers\Html;
use\yii\bootstrap4\ActiveForm;

$this->title = 'Antri Kuy';
?>
<div class="employee-page-loket">
    <div class="offset-lg-3 col-lg-6">
        <div class="card card-outline card-primary mx-auto">
            <div class="card-body">
                <h3 class="card-text text-center">Silahkan Mengantri Disini !!! </h3>
                <div class="form-group mt-5">
                    <label>Pilih Loket</label>
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
            </div>

            <div class="card-footer text-center mt-5" style="background-color: white">

                <?= Html::submitButton('<h5>Ambil Nomor Antrian</h5>', ['class' => 'btn btn-primary btn-lg-block']) ?>
                
            </div>
        </div>
    </div>
</div>

