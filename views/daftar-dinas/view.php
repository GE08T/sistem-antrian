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
<div class="col-lg-12 mx-auto py-3">
    <div class="card card-outline card-primary">
        <h1 class="mx-auto"><?= Html::encode($this->title) ?></h1> 
    
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'kategoriPlyn.nama_kategori',
                    'role.item_name',
                    'jam_buka_dinas',
                    'jam_tutup_dinas',
                    'nama_dinas',
                    'no_telp',
                    'provinsi',
                    'kabupaten_kota',
                    'kecamatan',
                    'desa',
                    'alamat:ntext',
                    [
                        'label'=>'foto',
                        'format'=>'raw',
                        'value'=> Html::img(Yii::$app->request->baseUrl.'/upload/'.$model->foto,['width'=>'100px']),
                    ],
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
</div>
