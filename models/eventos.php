<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_eventos".
 *
 * @property integer $id
 * @property string $evento
 *
 * @property RiesgosydesastresAppDescripcion[] $riesgosydesastresAppDescripcions
 */
class eventos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_eventos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['evento'], 'required'],
            [['evento'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'evento' => 'Evento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppDescripcions()
    {
        return $this->hasMany(RiesgosydesastresAppDescripcion::className(), ['id_app_eventos' => 'id']);
    }
}
