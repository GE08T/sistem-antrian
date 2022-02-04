<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\Layanan */

$this->title = 'Update : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Layanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="layanan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
