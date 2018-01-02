<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\vereda;

/**
 * veredaSearch represents the model behind the search form about `app\models\vereda`.
 */
class veredaSearch extends vereda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gid', '__gid'], 'integer'],
            [['nombre_ver', 'cod_mun', 'cod_dane', 'nombre_mun', 'nombre_lar', 'geom'], 'safe'],
            [['st_area_sh', 'st_length_'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = vereda::find();

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
            'gid' => $this->gid,
            '__gid' => $this->__gid,
            'st_area_sh' => $this->st_area_sh,
            'st_length_' => $this->st_length_,
        ]);

        $query->andFilterWhere(['like', 'nombre_ver', $this->nombre_ver])
            ->andFilterWhere(['like', 'cod_mun', $this->cod_mun])
            ->andFilterWhere(['like', 'cod_dane', $this->cod_dane])
            ->andFilterWhere(['like', 'nombre_mun', $this->nombre_mun])
            ->andFilterWhere(['like', 'nombre_lar', $this->nombre_lar])
            ->andFilterWhere(['like', 'geom', $this->geom]);

        return $dataProvider;
    }
}
