<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\DaftarDinas */

$this->title = 'Update : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daftar-dinas-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
