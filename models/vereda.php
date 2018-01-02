<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrativa.g_vereda".
 *
 * @property integer $gid
 * @property integer $__gid
 * @property string $nombre_ver
 * @property string $cod_mun
 * @property string $cod_dane
 * @property string $nombre_mun
 * @property string $nombre_lar
 * @property string $st_area_sh
 * @property string $st_length_
 * @property string $geom
 *
 * @property RiesgosydesastresAppDescripcion[] $riesgosydesastresAppDescripcions
 */
class vereda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrativa.g_vereda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['__gid'], 'integer'],
            [['st_area_sh', 'st_length_'], 'number'],
            [['nombre_ver'], 'string', 'max' => 50],
            [['cod_mun'], 'string', 'max' => 5],
            [['cod_dane'], 'string', 'max' => 11],
            [['nombre_mun', 'nombre_lar'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gid' => 'Gid',
            '__gid' => 'Gid',
            'nombre_ver' => 'Nombre Ver',
            'cod_mun' => 'Cod Mun',
            'cod_dane' => 'Cod Dane',
            'nombre_mun' => 'Nombre Mun',
            'nombre_lar' => 'Nombre Lar',
            'st_area_sh' => 'St Area Sh',
            'st_length_' => 'St Length',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppDescripcions()
    {
        return $this->hasMany(RiesgosydesastresAppDescripcion::className(), ['id_vereda' => 'gid']);
    }
}
