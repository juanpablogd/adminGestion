<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\decreto;

/**
 * decretoSearch represents the model behind the search form about `app\models\decreto`.
 */
class decretoSearch extends decreto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_app_descripcion'], 'integer'],
            [['no_decreto', 'fecha_inicio', 'fecha_final', 'plan_accion', 'elaboro_edan', 'rud'], 'safe'],
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
        $query = decreto::find();

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
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_final' => $this->fecha_final,
            'id_app_descripcion' => $this->id_app_descripcion,
        ]);

        $query->andFilterWhere(['like', 'no_decreto', $this->no_decreto])
            ->andFilterWhere(['like', 'plan_accion', $this->plan_accion])
            ->andFilterWhere(['like', 'elaboro_edan', $this->elaboro_edan])
            ->andFilterWhere(['like', 'rud', $this->rud]);

        return $dataProvider;
    }
}
