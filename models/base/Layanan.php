<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "layanan".
 *
 * @property int $id
 * @property int $id_dinas
 * @property string $nama_layanan
 * @property int $max_antrian
 * @property string $kode_antrian
 *
 * @property DaftarDinas $dinas
 */
class Layanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'layanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dinas', 'nama_layanan', 'max_antrian', 'kode_antrian'], 'required'],
            [['id_dinas', 'max_antrian'], 'integer'],
            [['nama_layanan'], 'string', 'max' => 100],
            [['kode_antrian'], 'string', 'max' => 10],
            [['id_dinas'], 'exist', 'skipOnError' => true, 'targetClass' => DaftarDinas::className(), 'targetAttribute' => ['id_dinas' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_dinas' => 'Dinas',
            'nama_layanan' => 'Nama Layanan',
            'max_antrian' => 'Max Antrian',
            'kode_antrian' => 'Kode Antrian',
        ];
    }

    /**
     * Gets query for [[Dinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDinas()
    {
        return $this->hasOne(DaftarDinas::className(), ['id' => 'id_dinas']);
    }
}
