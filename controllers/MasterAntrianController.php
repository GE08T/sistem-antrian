<?php

namespace app\controllers;

use Yii;

class MasterAntrianController extends \yii\web\Controller
{
    
    public function actionKategori()
    {
        $kategori = \app\models\base\KategoriPelayanan::find()->all();

        $this->layout = "main-antri";
        return $this->render('kategori', ['kategori' => $kategori]);
    }

    public function actionDinas()
    {
        $dinas = \app\models\base\DaftarDinas::find()->all();

        $this->layout = "main-antri";
        return $this->render('Dinas');
    }
}
