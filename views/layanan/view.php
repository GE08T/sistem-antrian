<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\Layanan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Layanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="layanan-view">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>

        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'id_dinas',
                    'nama_layanan',
                    'max_antrian',
                    'kode_antrian',
                ],
            ]) ?>
        </div>

        <div style="margin-left: 20px">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>
    </div>
</div>
