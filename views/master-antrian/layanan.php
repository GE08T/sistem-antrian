<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Layanan';
?>
<div class="master-antrian-layanan">
    <div class="col-lg-12 mx-auto">

    <div class="card card-outline card-primary pb-4">
        <h2 class="d-flex justify-content-center mb-2"><?= Html::encode($this->title) ?></h2>
            <div class="justify-content-center">    

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

                        <?php if (count($layanan) > 0) {?>
                            <?php foreach ($layanan as $r) { ?>
                            <tr>
                                <td><?= $r->nama_layanan; ?></td>
                                <td><?= $r->kode_antrian; ?></td>
                                <td><?= $r->max_antrian; ?></td>
                                <td>
                                    <span><?= Html::a('Update')?></span>
                                    <span><?= Html::a('Delete')?></span>
                                </td>
                            </tr>
                            <?php } ?>                
                        <?php }else { ?> 
                            <tr>
                                <td colspan="4">Maaf Belum Tersedia Layanan </td>
                            </tr>
                        <?php } ?>
 
                        </tbody>
                    </table>
                </div>
            </div>                
        </div>
    </div>

    </div>
</div>