<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\apoyo;

/**
 * apoyoSearch represents the model behind the search form about `app\models\apoyo`.
 */
class apoyoSearch extends apoyo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_app_descripcion', 'subsidio_arriendo', 'menajes', 'aport_alimentacion', 'materiales_const', 'sacos', 'otros', 'trasnf_economicas', 'recurs_ejecutados', 'apoyo_fngr_recuperacion', 'aport_munucipio', 'aport_bomberos', 'aport_epc', 'aport_fuerz_armadas', 'aport_defen_civil', 'aport_car', 'aport_otras', 'don_nacionanles', 'don_internacional', 'don_otras'], 'integer'],
            [['fecha_entrega', 'objeto_fngr'], 'safe'],
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
        $query = apoyo::find();

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
            'id_app_descripcion' => $this->id_app_descripcion,
            'subsidio_arriendo' => $this->subsidio_arriendo,
            'menajes' => $this->menajes,
            'aport_alimentacion' => $this->aport_alimentacion,
            'materiales_const' => $this->materiales_const,
            'sacos' => $this->sacos,
            'otros' => $this->otros,
            'trasnf_economicas' => $this->trasnf_economicas,
            'recurs_ejecutados' => $this->recurs_ejecutados,
            'fecha_entrega' => $this->fecha_entrega,
            'apoyo_fngr_recuperacion' => $this->apoyo_fngr_recuperacion,
            'aport_munucipio' => $this->aport_munucipio,
            'aport_bomberos' => $this->aport_bomberos,
            'aport_epc' => $this->aport_epc,
            'aport_fuerz_armadas' => $this->aport_fuerz_armadas,
            'aport_defen_civil' => $this->aport_defen_civil,
            'aport_car' => $this->aport_car,
            'aport_otras' => $this->aport_otras,
            'don_nacionanles' => $this->don_nacionanles,
            'don_internacional' => $this->don_internacional,
            'don_otras' => $this->don_otras,
        ]);

        $query->andFilterWhere(['like', 'objeto_fngr', $this->objeto_fngr]);

        return $dataProvider;
    }
}
