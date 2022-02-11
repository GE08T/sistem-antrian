<?php

namespace app\controllers;

use Yii;
use app\models;
use app\models\base\KategoriPelayanan;
use app\models\base\DaftarDinas;
use app\models\base\Layanan;

class MasterAntrianController extends \yii\web\Controller
{
    
    public function actionKategori()
    {
        $kategori = KategoriPelayanan::find()->all();

        $this->layout = "main-antri";
        return $this->render('kategori', ['kategori' => $kategori]);
    }

    public function actionDinas($id)
    {
        $dinas = DaftarDinas::find()->where(['id_kategori_plyn' => $id])->all();

        $this->layout = "main-antri";
        return $this->render('Dinas', ['dinas' => $dinas]);
    }

    public function actionLayanan($id)
    {
        $layanan = Layanan::find()->where(['id_dinas' => $id])->all();

        $this->layout = "main-antri";
        return $this->render('layanan', ['layanan' => $layanan]);
    }
}
