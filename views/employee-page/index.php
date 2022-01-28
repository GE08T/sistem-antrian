<?php

/* @var $this yii\web\View */

use\yii\helpers\Html;

$this->title = 'Antri Kuy';
?>
<div class="employee-page-index">

    <div class="text-center">
        <div class="card card-outline card-primary mx-auto" style="width: 65rem;">
            <div class="card-body">            
                <div class="card-header bg-primary">
                    <h3 class="card-text">Dashboard Employee</h3>
                </div>

                <div class="body-content mt-4">
                    <h4>SELAMAT DATANG DISINI!</h4>
                    <h5>Antri Kuy (Sistem Management Antrian Online Terpercaya).</h5>
                </div>
            </div>

            <footer class="footer mt-auto py-3 text-muted">
            <div class="row">
                <p class="col-lg-5">&copy; GET Company <?= date('Y') ?></p>
                <p class="col-lg-5"><?= Yii::powered() ?></p>
            </div>
            </footer>
        </div>
    </div>

    <div class="card my-4 mx-auto" style="width: 65rem;">
    <div class="card-header" style="background-color: white";><h5>Bantuan Cepat</h5></div>
    <div class="card-body">
        <p class="card-text">Disini adalah tempat karyawan untuk memangakses loket, <br> Klik disini untuk mengakses menu loket untuk memanggil nomor antrian. <?= Html::a('klik disini', [''], ['class' => 'link']) ?></p>
    </div>
    </div>

</div>

