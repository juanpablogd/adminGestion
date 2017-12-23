<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\entregaMateriales;

/**
 * entregaMaterialesSearch represents the model behind the search form about `app\models\entregaMateriales`.
 */
class entregaMaterialesSearch extends entregaMateriales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'valor', 'id_app_descripcion', 'id_app_material'], 'integer'],
            [['des_entregam'], 'safe'],
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
        $query = entregaMateriales::find();

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
            'valor' => $this->valor,
            'id_app_descripcion' => $this->id_app_descripcion,
            'id_app_material' => $this->id_app_material,
        ]);

        $query->andFilterWhere(['like', 'des_entregam', $this->des_entregam]);

        return $dataProvider;
    }
}
