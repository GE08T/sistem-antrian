<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "antrian".
 *
 * @property int $id
 * @property int $id_dinas
 * @property int $id_layanan
 * @property int $id_user
 * @property string $tgl_antri
 * @property string $no_antrian
 */
class Antrian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antrian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dinas', 'id_layanan'], 'required'],
            [['id_dinas', 'id_layanan', 'id_user'], 'integer'],
            [['tgl_antri'], 'safe'],
            [['no_antrian'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_dinas' => 'Pilih Dinas',
            'id_layanan' => 'Pilih Layanan',
            'id_user' => 'Id User',
            'tgl_antri' => 'Tgl Antri',
            'no_antrian' => 'No Antrian',
        ];
    }

    public function getDaftarDinas($id)
    {
        return $this->hasOne(DaftarDInas::className(), ['id' => 'id_dinas']);
    }

    public function getLayanan($id)
    {
        return $this->hasOne(Layanan::className(), ['id' => 'id_layanan']);
    }
}
