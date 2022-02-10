<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Daftar Dinas';
?>
<div class="master-antrian-dinas">
    <div class="col-lg-12 mx-auto">

    <div class="card card-outline card-primary pb-4">
        <h2 class="d-flex justify-content-center mb-3"><?= Html::encode($this->title) ?></h2>

        <div class="justify-content-center row">
            <div class="row justify-content-center">    

                <?php
                foreach ($dinas as $r) {
                ?>
                    <div class="card bg-light col-sm-3 " style="margin: 1rem">
                        <div class="card-body text-center">
                            <?= $r->nama_dinas ?>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>

    </div>
</div>