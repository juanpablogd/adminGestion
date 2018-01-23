<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_decreto".
 *
 * @property integer $id
 * @property string $no_decreto
 * @property string $fecha_inicio
 * @property string $fecha_final
 * @property string $plan_accion
 * @property string $elaboro_edan
 * @property string $rud
 * @property integer $id_app_descripcion
 *
 * @property descripcion $idAppDescripcion
 */
class decreto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_decreto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_decreto', 'fecha_inicio', 'fecha_final', 'plan_accion', 'id_app_descripcion'], 'required'],
            [['no_decreto', 'plan_accion', 'elaboro_edan'], 'string'],
            [['fecha_inicio', 'fecha_final'], 'safe'],
            [['id_app_descripcion'], 'integer'],
            [['rud'], 'string', 'max' => 255],
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
            'no_decreto' => 'No. Decreto',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_final' => 'Fecha Final',
            'plan_accion' => 'Plan Acción',
            'elaboro_edan' => 'Elaboro Edan',
            'rud' => 'Rud',
            'id_app_descripcion' => 'Id App Descripcion',
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
