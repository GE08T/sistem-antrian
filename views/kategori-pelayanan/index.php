<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\KategoriPelayananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Pelayanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-pelayanan-index">
    
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
                    'nama_kategori',
                    'icon',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, app\models\base\KategoriPelayanan $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
