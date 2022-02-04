<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\Layanan;

/**
 * LayananSearch represents the model behind the search form of `app\models\base\Layanan`.
 */
class LayananSearch extends Layanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_dinas', 'max_antrian'], 'integer'],
            [['nama_layanan', 'kode_antrian'], 'safe'],
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
        $query = Layanan::find();

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
            'id_dinas' => $this->id_dinas,
            'max_antrian' => $this->max_antrian,
        ]);

        $query->andFilterWhere(['like', 'nama_layanan', $this->nama_layanan])
            ->andFilterWhere(['like', 'kode_antrian', $this->kode_antrian]);

        return $dataProvider;
    }
}
