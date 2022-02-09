<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\DaftarDinas;

/**
 * DaftarDinasSearch represents the model behind the search form of `app\models\base\DaftarDinas`.
 */
class DaftarDinasSearch extends DaftarDinas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_kategori_plyn', 'id_role'], 'integer'],
            [['jam_buka_dinas', 'jam_tutup_dinas', 'nama_dinas', 'no_telp', 'provinsi', 'kabupaten_kota', 'kecamatan', 'desa', 'alamat', 'foto', 'foto_id', 'jam_buka_antrian', 'jam_tutup_antrian'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DaftarDinas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_kategori_plyn' => $this->id_kategori_plyn,
            'id_role' => $this->id_role,
            'jam_buka_dinas' => $this->jam_buka_dinas,
            'jam_tutup_dinas' => $this->jam_tutup_dinas,
            'jam_buka_antrian' => $this->jam_buka_antrian,
            'jam_tutup_antrian' => $this->jam_tutup_antrian,
        ]);

        $query->andFilterWhere(['like', 'nama_dinas', $this->nama_dinas])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'provinsi', $this->provinsi])
            ->andFilterWhere(['like', 'kabupaten_kota', $this->kabupaten_kota])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'desa', $this->desa])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
