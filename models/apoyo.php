<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_apoyo".
 *
 * @property integer $id
 * @property integer $id_app_descripcion
 * @property string $subsidio_arriendo
 * @property string $menajes
 * @property string $aport_alimentacion
 * @property string $materiales_const
 * @property string $sacos
 * @property string $otros
 * @property string $trasnf_economicas
 * @property string $recurs_ejecutados
 * @property string $fecha_entrega
 * @property string $objeto_fngr
 * @property string $apoyo_fngr_recuperacion
 * @property string $aport_munucipio
 * @property string $aport_bomberos
 * @property string $aport_epc
 * @property string $aport_fuerz_armadas
 * @property string $aport_defen_civil
 * @property string $aport_car
 * @property string $aport_otras
 * @property string $don_nacionanles
 * @property string $don_internacional
 * @property string $don_otras
 *
 * @property RiesgosydesastresAppDescripcion $idAppDescripcion
 */
class apoyo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_apoyo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_app_descripcion', 'fecha_entrega'], 'required'],
            [['id_app_descripcion', 'subsidio_arriendo', 'menajes', 'aport_alimentacion', 'materiales_const', 'sacos', 'otros', 'trasnf_economicas', 'recurs_ejecutados', 'apoyo_fngr_recuperacion', 'aport_munucipio', 'aport_bomberos', 'aport_epc', 'aport_fuerz_armadas', 'aport_defen_civil', 'aport_car', 'aport_otras', 'don_nacionanles', 'don_internacional', 'don_otras'], 'integer'],
            [['fecha_entrega'], 'safe'],
            [['objeto_fngr'], 'string'],
            [['id_app_descripcion'], 'unique'],
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
            'id_app_descripcion' => 'Descripción',
            'subsidio_arriendo' => 'Subsidio Arriendo',
            'menajes' => 'Menajes',
            'aport_alimentacion' => 'Aport. Alimentación',
            'materiales_const' => 'Materiales Const.',
            'sacos' => 'Sacos',
            'otros' => 'Otros',
            'trasnf_economicas' => 'Trasn. Económicas',
            'recurs_ejecutados' => 'Rec. Ejecutados',
            'fecha_entrega' => 'Fecha Entrega',
            'objeto_fngr' => 'Objeto Fngr',
            'apoyo_fngr_recuperacion' => 'Apoyo Fngr Recuperación',
            'aport_munucipio' => 'Aport. Munucipio',
            'aport_bomberos' => 'Aport. Bomberos',
            'aport_epc' => 'Aport. Epc',
            'aport_fuerz_armadas' => 'Aport. Fuerzas Armadas',
            'aport_defen_civil' => 'Aport. Defen. Civil',
            'aport_car' => 'Aport. CAR',
            'aport_otras' => 'Aport. Otras',
            'don_nacionanles' => 'Don. Nacionanles',
            'don_internacional' => 'Don. Internacionales',
            'don_otras' => 'Don. Otras',
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
