<?php

/* @var $this yii\web\View */

use\yii\helpers\Html;

$this->title = 'Antri Kuy';
?>
<div class="employee-page-loket">
    <div class="text-center">
        <div class="card card-outline card-primary mx-auto">
            <div class="card-body">
                <h2 class="card-text">Nomor Antrian Ke : </h2>
                <h3><input type="text" id="inc" value="0"></input></h3>
            </div>

            <div class="card-footer mt-5" style="background-color: white">

                <?= Html::button('<h2>Selanjutnya</h2>', ['class' => 'btn btn-primary', 'onClick' => 'buttonClick();']) ?>
                
            </div>
        </div>
    </div>
    <script>
    var i = 0;
    function buttonClick() {
        i++;
        document.getElementById('inc').value = i;
    }
    </script>
</div>


