<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\DaftarDinas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Dinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="daftar-dinas-view">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1>
    
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'id_kategori_plyn',
                    'id_role',
                    'jam_buka_dinas',
                    'jam_tutup_dinas',
                    'nama_dinas',
                    'no_telp',
                    'provinsi',
                    'kabupaten_kota',
                    'kecamatan',
                    'desa',
                    'alamat:ntext',
                    'foto',
                    'jam_buka_antrian',
                    'jam_tutup_antrian',
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
