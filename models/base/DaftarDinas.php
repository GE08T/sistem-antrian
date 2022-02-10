<?php

namespace app\models\base;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "daftar_dinas".
 *
 * @property int $id
 * @property int $id_kategori_plyn
 * @property int $id_role
 * @property string $jam_buka_dinas
 * @property string $jam_tutup_dinas
 * @property string $nama_dinas
 * @property string $no_telp
 * @property string $provinsi
 * @property string $kabupaten_kota
 * @property string $kecamatan
 * @property string $desa
 * @property string $alamat
 * @property string $foto
 * @property string $jam_buka_antrian
 * @property string $jam_tutup_antrian
 *
 * @property KategoriPelayanan $kategoriPlyn
 * @property Layanan[] $layanans
 */
class DaftarDinas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daftar_dinas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori_plyn', 'id_role', 'jam_buka_dinas', 'jam_tutup_dinas', 'nama_dinas', 'no_telp', 'provinsi', 'kabupaten_kota', 'kecamatan', 'desa', 'alamat', 'jam_buka_antrian', 'jam_tutup_antrian'], 'required'],
            [['id_kategori_plyn'], 'integer'],
            [['jam_buka_dinas', 'jam_tutup_dinas', 'jam_buka_antrian', 'jam_tutup_antrian'], 'safe'],
            [['alamat', 'id_role'], 'string'],
            [['nama_dinas', 'provinsi', 'kabupaten_kota', 'kecamatan', 'desa'], 'string', 'max' => 50],
            [['no_telp'], 'string', 'max' => 15],
            [['foto'], 'file', 'skipOnEmpty' => true,'extensions' => 'jpg, png, jpeg',],
            [['id_kategori_plyn'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPelayanan::className(), 'targetAttribute' => ['id_kategori_plyn' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */ 
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kategori_plyn' => 'Kategori Pelayanan',
            'id_role' => 'Role',
            'jam_buka_dinas' => 'Jam Buka Dinas',
            'jam_tutup_dinas' => 'Jam Tutup Dinas',
            'nama_dinas' => 'Nama Dinas',
            'no_telp' => 'No Telp',
            'provinsi' => 'Provinsi',
            'kabupaten_kota' => 'Kabupaten / Kota',
            'kecamatan' => 'Kecamatan',
            'desa' => 'Desa',
            'alamat' => 'Alamat',
            'foto' => 'Gambar',
            'jam_buka_antrian' => 'Jam Buka Antrian',
            'jam_tutup_antrian' => 'Jam Tutup Antrian',
        ];
    }

    /**
     * Gets query for [[KategoriPlyn]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPlyn()
    {
        return $this->hasOne(KategoriPelayanan::className(), ['id' => 'id_kategori_plyn']);
    }

    /**
     * Gets query for [[Layanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLayanans()
    {
        return $this->hasMany(Layanan::className(), ['id_dinas' => 'id']);
    }

    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'item_name']);
    }


    // public static function getDb()
    // {
    //     $db = Yii::$app->db;
    //     $role = $db->createCommand('SELECT item_name FROM auth_assignment')->queryColumn();
    // }
}
