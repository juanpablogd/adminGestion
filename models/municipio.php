<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrativa.g_municipio_simp".
 *
 * @property string $codigo_mun
 * @property string $nombre_mun
 * @property string $geom
 * @property string $codigo_pro
 * @property string $padre
 *
 * @property DelitosGDelitoMpioCubo[] $delitosGDelitoMpioCubos
 * @property EmergenciasHIncendios[] $emergenciasHIncendios
 * @property IccuMpTProyecto[] $iccuMpTProyectos
 * @property Modulo123TUsuarioNuse[] $modulo123TUsuarioNuses
 * @property RiesgosydesastresAppDescripcion[] $riesgosydesastresAppDescripcions
 * @property RionegroMpTProyecto[] $rionegroMpTProyectos
 * @property SeguimientopddMpTProyecto[] $seguimientopddMpTProyectos
 * @property TransporteymovilidadMpTProyecto[] $transporteymovilidadMpTProyectos
 */
class municipio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrativa.g_municipio_simp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo_mun'], 'required'],
            [['codigo_mun'], 'string', 'max' => 5],
            [['nombre_mun'], 'string', 'max' => 100],
            [['codigo_pro'], 'string', 'max' => 10],
            [['padre'], 'string', 'max' => 18],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo_mun' => 'Codigo Mun',
            'nombre_mun' => 'Nombre Mun',
            'codigo_pro' => 'Codigo Pro',
            'padre' => 'Padre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDelitosGDelitoMpioCubos()
    {
        return $this->hasMany(DelitosGDelitoMpioCubo::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmergenciasHIncendios()
    {
        return $this->hasMany(EmergenciasHIncendios::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIccuMpTProyectos()
    {
        return $this->hasMany(IccuMpTProyecto::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModulo123TUsuarioNuses()
    {
        return $this->hasMany(Modulo123TUsuarioNuse::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppDescripcions()
    {
        return $this->hasMany(RiesgosydesastresAppDescripcion::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRionegroMpTProyectos()
    {
        return $this->hasMany(RionegroMpTProyecto::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeguimientopddMpTProyectos()
    {
        return $this->hasMany(SeguimientopddMpTProyecto::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransporteymovilidadMpTProyectos()
    {
        return $this->hasMany(TransporteymovilidadMpTProyecto::className(), ['codigo_mun' => 'codigo_mun']);
    }
}
