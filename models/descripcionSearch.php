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
    public $estado;
    public $evento;
    public $nombre_mun;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_app_eventos', 'id_app_estado_evento', 'responsable_atencion', 'id_app_tipo_incencio', 'id_vereda'], 'integer'],
            [['fecha_reporte', 'barrio', 'punto', 'fecha_inicio', 'fecha_culminacion', 'acciones', 'comentarios', 'descripcion_atencion', 'codigo_mun','evento', 'estado', 'nombre_mun' ,'id_caso_secad','des_clas_nueve'], 'safe'],
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
            'sort' => ['attributes' => ['evento','estado','fecha_reporte','nombre_mun', 'fecha_inicio', 'fecha_culminacion','id_caso_secad','des_clas_nueve']]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->joinWith('codigoMun');
        $query->joinWith('idAppEstadoEvento');
        $query->joinWith('idAppEventos');
        //expresiones para TIMESTAMP
        $exp_fecha_reporte = new \yii\db\Expression('(fecha_reporte::text)');
        $exp_fecha_inicio = new \yii\db\Expression('(fecha_inicio::text)');
        $exp_fecha_culminacion = new \yii\db\Expression('(fecha_culminacion::text)');

        $query->andFilterWhere(['like', 'riesgosydesastres.app_eventos.evento', $this->evento])
            ->andFilterWhere(['like', 'riesgosydesastres.app_estado_evento.estado', $this->estado])
            ->andFilterWhere(['like', $exp_fecha_reporte, $this->fecha_reporte])
            ->andFilterWhere(['like', 'administrativa.g_municipio_simp.nombre_mun', $this->nombre_mun])
            ->andFilterWhere(['like', $exp_fecha_inicio, $this->fecha_inicio])
            ->andFilterWhere(['like', $exp_fecha_culminacion, $this->fecha_culminacion])
            ->andFilterWhere(['like', 'id_caso_secad', $this->id_caso_secad])
            ->andFilterWhere(['like', 'des_clas_nueve', $this->des_clas_nueve]);

        return $dataProvider;
    }
}
