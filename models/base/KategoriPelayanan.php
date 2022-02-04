<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "kategori_pelayanan".
 *
 * @property int $id
 * @property string $nama_kategori
 * @property string $icon
 *
 * @property DaftarDinas[] $daftarDinas
 */
class KategoriPelayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_pelayanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori', 'icon'], 'required'],
            [['nama_kategori'], 'string', 'max' => 100],
            [['icon'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kategori' => 'Nama Kategori',
            'icon' => 'Icon',
        ];
    }

    /**
     * Gets query for [[DaftarDinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDaftarDinas()
    {
        return $this->hasMany(DaftarDinas::className(), ['id_kategori_plyn' => 'id']);
    }
}
