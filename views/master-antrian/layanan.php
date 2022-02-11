<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Layanan';
?>
<div class="master-antrian-layanan">
    <div class="col-lg-12 mx-auto">

    <div class="card card-outline card-primary pb-4">
        <h2 class="d-flex justify-content-center mb-3"><?= Html::encode($this->title) ?></h2>
            <div class="row justify-content-center">    

                <?php
                foreach ($layanan as $r) {
                ?>
                    <div class="col-sm-8 offset-md-1" style="margin: 1rem">
                        <div class="card-body text-center">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">Nama Layanan</th>
                                    <th scope="col">Kode Antrian</th>
                                    <th scope="col">Maks Antrian</th>
                                    <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><?= $r->nama_layanan ?></td>
                                    <td><?= $r->kode_antrian ?></td>
                                    <td><?= $r->max_antrian ?></td>
                                    <td><i class="fas fa-plus-circle mx-auto my-auto"style="font-size: 25px"></i></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                }
                ?>
                
        </div>
    </div>

    </div>
</div>