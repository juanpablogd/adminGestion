<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_tipo_incendio".
 *
 * @property integer $id
 * @property string $tipo_incendio
 *
 * @property RiesgosydesastresAppDescripcion[] $riesgosydesastresAppDescripcions
 */
class tipoIncendio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_tipo_incendio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_incendio'], 'required'],
            [['tipo_incendio'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_incendio' => 'Tipo Incendio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppDescripcions()
    {
        return $this->hasMany(RiesgosydesastresAppDescripcion::className(), ['id_app_tipo_incencio' => 'id']);
    }
}
