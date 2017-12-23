<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_afectacion".
 *
 * @property integer $id
 * @property integer $id_app_descripcion
 * @property integer $no_muertos
 * @property integer $no_heridos
 * @property integer $no_desaparecidos
 * @property integer $no_personas
 * @property integer $no_familias
 * @property integer $no_ninos
 * @property integer $no_ancianos
 * @property integer $no_viviendas_destruidas
 * @property integer $no_viviendas_averiadas
 * @property integer $no_vias
 * @property integer $no_ptes_vehi
 * @property integer $no_ptes_peato
 * @property integer $no_acueductos
 * @property integer $no_alcantarillados
 * @property integer $no_plan_tratamiento_potable
 * @property integer $no_plan_tratamiento_residu
 * @property integer $no_c_salud
 * @property integer $no_c_educativos
 * @property integer $no_c_comunitarios
 * @property integer $no_e_panelera
 * @property integer $no_bosq_natural
 * @property integer $no_bosq_inter
 * @property integer $no_bos_plantado
 * @property integer $no_bos_seco
 * @property integer $no_paramo
 * @property integer $no_sabana
 * @property integer $no_pastos
 * @property integer $no_rastrojo
 * @property integer $no_vegetacion
 * @property integer $no_seca
 * @property integer $no_bovinos
 * @property integer $no_caprinos
 * @property integer $no_porcinos
 * @property integer $no_equinos
 * @property integer $no_aves
 * @property integer $no_peces
 * @property integer $id_app_cul_transitorio
 * @property integer $no_cul_transitorio
 * @property integer $id_app_cul_permanente
 * @property integer $no_cul_permanente
 * @property integer $id_app_cul_hortalizas
 * @property integer $no_cul_hortalizas
 * @property integer $id_app_cul_otras_hortalizas
 * @property integer $no_cul_otras_hortalizas
 * @property integer $id_app_cul_frutales
 * @property integer $no_cul_frutales
 * @property integer $no_frutales_disper
 *
 * @property culFrutales $idAppCulFrutales
 * @property culHortalizas $idAppCulHortalizas
 * @property culOtrasHortalizas $idAppCulOtrasHortalizas
 * @property culPermanente $idAppCulPermanente
 * @property culTransitorio $idAppCulTransitorio
 * @property descripcion $idAppDescripcion
 */
class afectacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_afectacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_app_descripcion'], 'required'],
            [['id_app_descripcion', 'no_muertos', 'no_heridos', 'no_desaparecidos', 'no_personas', 'no_familias', 'no_ninos', 'no_ancianos', 'no_viviendas_destruidas', 'no_viviendas_averiadas', 'no_vias', 'no_ptes_vehi', 'no_ptes_peato', 'no_acueductos', 'no_alcantarillados', 'no_plan_tratamiento_potable', 'no_plan_tratamiento_residu', 'no_c_salud', 'no_c_educativos', 'no_c_comunitarios', 'no_e_panelera', 'no_bosq_natural', 'no_bosq_inter', 'no_bos_plantado', 'no_bos_seco', 'no_paramo', 'no_sabana', 'no_pastos', 'no_rastrojo', 'no_vegetacion', 'no_seca', 'no_bovinos', 'no_caprinos', 'no_porcinos', 'no_equinos', 'no_aves', 'no_peces', 'id_app_cul_transitorio', 'no_cul_transitorio', 'id_app_cul_permanente', 'no_cul_permanente', 'id_app_cul_hortalizas', 'no_cul_hortalizas', 'id_app_cul_otras_hortalizas', 'no_cul_otras_hortalizas', 'id_app_cul_frutales', 'no_cul_frutales', 'no_frutales_disper'], 'integer'],
            [['id_app_descripcion'], 'unique'],
            [['id_app_cul_frutales'], 'exist', 'skipOnError' => true, 'targetClass' => culFrutales::className(), 'targetAttribute' => ['id_app_cul_frutales' => 'id']],
            [['id_app_cul_hortalizas'], 'exist', 'skipOnError' => true, 'targetClass' => culHortalizas::className(), 'targetAttribute' => ['id_app_cul_hortalizas' => 'id']],
            [['id_app_cul_otras_hortalizas'], 'exist', 'skipOnError' => true, 'targetClass' => culOtrasHortalizas::className(), 'targetAttribute' => ['id_app_cul_otras_hortalizas' => 'id']],
            [['id_app_cul_permanente'], 'exist', 'skipOnError' => true, 'targetClass' => culPermanente::className(), 'targetAttribute' => ['id_app_cul_permanente' => 'id']],
            [['id_app_cul_transitorio'], 'exist', 'skipOnError' => true, 'targetClass' => culTransitorio::className(), 'targetAttribute' => ['id_app_cul_transitorio' => 'id']],
            [['id_app_descripcion'], 'exist', 'skipOnError' => true, 'targetClass' => descripcion::className(), 'targetAttribute' => ['id_app_descripcion' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_app_descripcion' => 'Id App Descripcion',
            'no_muertos' => 'No Muertos',
            'no_heridos' => 'No Heridos',
            'no_desaparecidos' => 'No Desaparecidos',
            'no_personas' => 'No Personas',
            'no_familias' => 'No Familias',
            'no_ninos' => 'No Ninos',
            'no_ancianos' => 'No Ancianos',
            'no_viviendas_destruidas' => 'No Viviendas Destruidas',
            'no_viviendas_averiadas' => 'No Viviendas Averiadas',
            'no_vias' => 'No Vias',
            'no_ptes_vehi' => 'No Ptes Vehi',
            'no_ptes_peato' => 'No Ptes Peato',
            'no_acueductos' => 'No Acueductos',
            'no_alcantarillados' => 'No Alcantarillados',
            'no_plan_tratamiento_potable' => 'No Plan Tratamiento Potable',
            'no_plan_tratamiento_residu' => 'No Plan Tratamiento Residu',
            'no_c_salud' => 'No C Salud',
            'no_c_educativos' => 'No C Educativos',
            'no_c_comunitarios' => 'No C Comunitarios',
            'no_e_panelera' => 'No E Panelera',
            'no_bosq_natural' => 'No Bosq Natural',
            'no_bosq_inter' => 'No Bosq Inter',
            'no_bos_plantado' => 'No Bos Plantado',
            'no_bos_seco' => 'No Bos Seco',
            'no_paramo' => 'No Paramo',
            'no_sabana' => 'No Sabana',
            'no_pastos' => 'No Pastos',
            'no_rastrojo' => 'No Rastrojo',
            'no_vegetacion' => 'No Vegetacion',
            'no_seca' => 'No Seca',
            'no_bovinos' => 'No Bovinos',
            'no_caprinos' => 'No Caprinos',
            'no_porcinos' => 'No Porcinos',
            'no_equinos' => 'No Equinos',
            'no_aves' => 'No Aves',
            'no_peces' => 'No Peces',
            'id_app_cul_transitorio' => 'Id App Cul Transitorio',
            'no_cul_transitorio' => 'No Cul Transitorio',
            'id_app_cul_permanente' => 'Id App Cul Permanente',
            'no_cul_permanente' => 'No Cul Permanente',
            'id_app_cul_hortalizas' => 'Id App Cul Hortalizas',
            'no_cul_hortalizas' => 'No Cul Hortalizas',
            'id_app_cul_otras_hortalizas' => 'Id App Cul Otras Hortalizas',
            'no_cul_otras_hortalizas' => 'No Cul Otras Hortalizas',
            'id_app_cul_frutales' => 'Id App Cul Frutales',
            'no_cul_frutales' => 'No Cul Frutales',
            'no_frutales_disper' => 'No Frutales Disper',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppCulFrutales()
    {
        return $this->hasOne(culFrutales::className(), ['id' => 'id_app_cul_frutales']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppCulHortalizas()
    {
        return $this->hasOne(culHortalizas::className(), ['id' => 'id_app_cul_hortalizas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppCulOtrasHortalizas()
    {
        return $this->hasOne(culOtrasHortalizas::className(), ['id' => 'id_app_cul_otras_hortalizas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppCulPermanente()
    {
        return $this->hasOne(culPermanente::className(), ['id' => 'id_app_cul_permanente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppCulTransitorio()
    {
        return $this->hasOne(culTransitorio::className(), ['id' => 'id_app_cul_transitorio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppDescripcion()
    {
        return $this->hasOne(descripcion::className(), ['id' => 'id_app_descripcion']);
    }
}
