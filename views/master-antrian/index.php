<?php

use yii\helpers\Html;

$this->title = 'Antrian';

?>
<div class="master-antrian-index">

    <div class="col-lg-12 mx-auto">
        <div class="card card-outline card-primary">
        
            <div class="card-body">    
                <?php //isi content
                    $this->beginContent('@app/views/master-antrian/kategori.php');
                    $this->endContent();
                ?>
            </div>
            
        </div>
    </div>

</div>