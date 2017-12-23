<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\seguimiento;

/**
 * seguimientoSearch represents the model behind the search form about `app\models\seguimiento`.
 */
class seguimientoSearch extends seguimiento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_app_descripcion'], 'integer'],
            [['tramite_ungrd', 'atendido', 'num_memorando', 'analisis_solicitud', 'organis_intervencion', 'fecha'], 'safe'],
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
        $query = seguimiento::find();

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
            'fecha' => $this->fecha,
            'id_app_descripcion' => $this->id_app_descripcion,
        ]);

        $query->andFilterWhere(['like', 'tramite_ungrd', $this->tramite_ungrd])
            ->andFilterWhere(['like', 'atendido', $this->atendido])
            ->andFilterWhere(['like', 'num_memorando', $this->num_memorando])
            ->andFilterWhere(['like', 'analisis_solicitud', $this->analisis_solicitud])
            ->andFilterWhere(['like', 'organis_intervencion', $this->organis_intervencion]);

        return $dataProvider;
    }
}
