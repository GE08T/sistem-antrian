<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\KategoriPelayanan */

$this->title = 'Kategori Pelayanan';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pelayanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-pelayanan-create">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>

        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>`
    </div>
</div>
