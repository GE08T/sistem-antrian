<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Daftar Dinas';
?>
<div class="master-antrian-dinas">
    <div class="col-lg-12 mx-auto">

    <div class="card card-outline card-primary pb-4">
        <h2 class="d-flex justify-content-center mb-3"><?= Html::encode($this->title) ?></h2>
            <div class="row justify-content-center">    

            <?php if (count($dinas) > 0) {?>
                <?php foreach ($dinas as $r) { ?>
                    <div class="card col-sm-3 offset-md-1" style="margin: 1rem">
                        <div class="card-body text-center">
                            <?= Html::img(['@web/upload', 'id' => $r->id], ['class'=>'img-responsive']);?>
                            <a href="<?= Url::toRoute(['master-antrian/layanan', 'id' => $r->id]) ?>"><?= $r->nama_dinas ?></a>
                        </div>
                    </div>
                <?php } ?>
            <?php }else { ?> 
                <div class="card col-sm-3 offset-md-1" style="margin: 1rem">
                    <div class="card-body text-center">
                        <h4>Maaf Daftar Dinas Belum ada</h4>
                    </div>
                </div>
            <?php } ?>
                
        </div>
    </div>

    </div>
</div>