<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_estado_evento".
 *
 * @property integer $id
 * @property string $estado
 *
 * @property RiesgosydesastresAppDescripcion[] $riesgosydesastresAppDescripcions
 */
class estadoEventos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_estado_evento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'required'],
            [['estado'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppDescripcions()
    {
        return $this->hasMany(RiesgosydesastresAppDescripcion::className(), ['id_app_estado_evento' => 'id']);
    }
}
