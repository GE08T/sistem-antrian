<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Antrian';
?>
<div class="master-antrian-kategori">
    <div class="col-lg-12 mx-auto">

        <div class="card card-outline card-primary pb-4">
            <h2 class="d-flex justify-content-center mb-3">Pilih Kategori</h2>
            <div class="row justify-content-center">
                
                <?php
                foreach ($kategori as $r) {
                ?>
                    <div class="card bg-light col-sm-3 offset-md-1" style="margin: 1rem">
                        <div class="card-body text-center">
                            <?= $r->nama_kategori ?>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>

    </div>
</div>