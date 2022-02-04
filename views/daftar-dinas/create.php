<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\DaftarDinas */

$this->title = 'Daftar Dinas';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-dinas-create">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>

        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>`
    </div>
</div>
