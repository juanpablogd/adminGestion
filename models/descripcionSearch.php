<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\descripcion;

/**
 * descripcionSearch represents the model behind the search form about `app\models\descripcion`.
 */
class descripcionSearch extends descripcion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_app_eventos', 'id_app_estado_evento', 'responsable_atencion', 'id_app_tipo_incencio', 'id_vereda'], 'integer'],
            [['fecha_reporte', 'barrio', 'punto', 'fecha_inicio', 'fecha_culminacion', 'acciones', 'comentarios', 'descripcion_atencion', 'codigo_mun'], 'safe'],
            [['latitud', 'longitud'], 'number'],
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
        $query = descripcion::find();

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
            'id_app_eventos' => $this->id_app_eventos,
            'fecha_reporte' => $this->fecha_reporte,
            'latitud' => $this->latitud,
            'longitud' => $this->longitud,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_culminacion' => $this->fecha_culminacion,
            'id_app_estado_evento' => $this->id_app_estado_evento,
            'responsable_atencion' => $this->responsable_atencion,
            'id_app_tipo_incencio' => $this->id_app_tipo_incencio,
            'id_vereda' => $this->id_vereda,
        ]);

        $query->andFilterWhere(['like', 'barrio', $this->barrio])
            ->andFilterWhere(['like', 'punto', $this->punto])
            ->andFilterWhere(['like', 'acciones', $this->acciones])
            ->andFilterWhere(['like', 'comentarios', $this->comentarios])
            ->andFilterWhere(['like', 'descripcion_atencion', $this->descripcion_atencion])
            ->andFilterWhere(['like', 'codigo_mun', $this->codigo_mun]);

        return $dataProvider;
    }
}
