<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DaftarDinasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Dinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-dinas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="card card-outline card-primary">
        <div class="mt-3 ml-3">
            <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    // 'id_kategori_plyn',
                    // 'id_role',
                    'nama_dinas',
                    'jam_buka_dinas',
                    'jam_tutup_dinas',
                    //'no_telp',
                    //'provinsi',
                    //'kabupaten_kota',
                    //'kecamatan',
                    //'desa',
                    //'alamat:ntext',
                    //'foto',
                    'jam_buka_antrian',
                    'jam_tutup_antrian',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, app\models\base\DaftarDinas $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
