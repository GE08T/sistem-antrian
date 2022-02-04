<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\KategoriPelayanan */

$this->title = 'Update : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pelayanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-pelayanan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
