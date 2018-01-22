<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_seguimiento".
 *
 * @property integer $id
 * @property string $tramite_ungrd
 * @property string $atendido
 * @property string $num_memorando
 * @property string $analisis_solicitud
 * @property string $organis_intervencion
 * @property string $fecha
 * @property integer $id_app_descripcion
 *
 * @property descripcion $idAppDescripcion
 */
class seguimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_seguimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tramite_ungrd', 'atendido', 'num_memorando', 'id_app_descripcion'], 'required'],
            [['atendido', 'num_memorando', 'analisis_solicitud', 'organis_intervencion'], 'string'],
            [['fecha'], 'safe'],
            [['id_app_descripcion'], 'integer'],
            [['tramite_ungrd'], 'string', 'max' => 50],
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
            'tramite_ungrd' => 'Trámite Ungrd',
            'atendido' => 'Atendido',
            'num_memorando' => 'No. Memorando',
            'analisis_solicitud' => 'Análisis Solicitud',
            'organis_intervencion' => 'Organ. Intervención',
            'fecha' => 'Fecha',
            'id_app_descripcion' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppDescripcion()
    {
        return $this->hasOne(descripcion::className(), ['id' => 'id_app_descripcion']);
    }
}
