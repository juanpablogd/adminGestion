<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\afectacion;

/**
 * afectacionSearch represents the model behind the search form about `app\models\afectacion`.
 */
class afectacionSearch extends afectacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'no_muertos', 'no_heridos', 'no_desaparecidos', 'no_personas', 'no_familias', 'no_ninos', 'no_ancianos', 'no_viviendas_destruidas', 'no_viviendas_averiadas', 'no_vias', 'no_ptes_vehi', 'no_ptes_peato', 'no_acueductos', 'no_alcantarillados', 'no_plan_tratamiento_potable', 'no_plan_tratamiento_residu', 'no_c_salud', 'no_c_educativos', 'no_c_comunitarios', 'no_e_panelera', 'no_bosq_natural', 'no_bosq_inter', 'no_bos_plantado', 'no_bos_seco', 'no_paramo', 'no_sabana', 'no_pastos', 'no_rastrojo', 'no_vegetacion', 'no_seca', 'no_bovinos', 'no_caprinos', 'no_porcinos', 'no_equinos', 'no_aves', 'no_peces', 'id_app_cul_transitorio', 'no_cul_transitorio', 'id_app_cul_permanente', 'no_cul_permanente', 'id_app_cul_hortalizas', 'no_cul_hortalizas', 'id_app_cul_otras_hortalizas', 'no_cul_otras_hortalizas', 'id_app_cul_frutales', 'no_cul_frutales', 'no_frutales_disper'], 'integer'],
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
        $query = afectacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['no_muertos', 'no_heridos', 'no_desaparecidos']]
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
            'no_muertos' => $this->no_muertos,
            'no_heridos' => $this->no_heridos,
            'no_desaparecidos' => $this->no_desaparecidos,
            'no_personas' => $this->no_personas,
            'no_familias' => $this->no_familias,
            'no_ninos' => $this->no_ninos,
            'no_ancianos' => $this->no_ancianos,
            'no_viviendas_destruidas' => $this->no_viviendas_destruidas,
            'no_viviendas_averiadas' => $this->no_viviendas_averiadas,
            'no_vias' => $this->no_vias,
            'no_ptes_vehi' => $this->no_ptes_vehi,
            'no_ptes_peato' => $this->no_ptes_peato,
            'no_acueductos' => $this->no_acueductos,
            'no_alcantarillados' => $this->no_alcantarillados,
            'no_plan_tratamiento_potable' => $this->no_plan_tratamiento_potable,
            'no_plan_tratamiento_residu' => $this->no_plan_tratamiento_residu,
            'no_c_salud' => $this->no_c_salud,
            'no_c_educativos' => $this->no_c_educativos,
            'no_c_comunitarios' => $this->no_c_comunitarios,
            'no_e_panelera' => $this->no_e_panelera,
            'no_bosq_natural' => $this->no_bosq_natural,
            'no_bosq_inter' => $this->no_bosq_inter,
            'no_bos_plantado' => $this->no_bos_plantado,
            'no_bos_seco' => $this->no_bos_seco,
            'no_paramo' => $this->no_paramo,
            'no_sabana' => $this->no_sabana,
            'no_pastos' => $this->no_pastos,
            'no_rastrojo' => $this->no_rastrojo,
            'no_vegetacion' => $this->no_vegetacion,
            'no_seca' => $this->no_seca,
            'no_bovinos' => $this->no_bovinos,
            'no_caprinos' => $this->no_caprinos,
            'no_porcinos' => $this->no_porcinos,
            'no_equinos' => $this->no_equinos,
            'no_aves' => $this->no_aves,
            'no_peces' => $this->no_peces,
            'id_app_cul_transitorio' => $this->id_app_cul_transitorio,
            'no_cul_transitorio' => $this->no_cul_transitorio,
            'id_app_cul_permanente' => $this->id_app_cul_permanente,
            'no_cul_permanente' => $this->no_cul_permanente,
            'id_app_cul_hortalizas' => $this->id_app_cul_hortalizas,
            'no_cul_hortalizas' => $this->no_cul_hortalizas,
            'id_app_cul_otras_hortalizas' => $this->id_app_cul_otras_hortalizas,
            'no_cul_otras_hortalizas' => $this->no_cul_otras_hortalizas,
            'id_app_cul_frutales' => $this->id_app_cul_frutales,
            'no_cul_frutales' => $this->no_cul_frutales,
            'no_frutales_disper' => $this->no_frutales_disper,
        ]);

        return $dataProvider;
    }
}
