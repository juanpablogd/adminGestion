<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_cul_transitorio".
 *
 * @property integer $id
 * @property string $cultivo_tra
 *
 * @property RiesgosydesastresAppAfectacion[] $riesgosydesastresAppAfectacions
 */
class culTransitorio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_cul_transitorio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cultivo_tra'], 'required'],
            [['cultivo_tra'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cultivo_tra' => 'Cultivo Transitorio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppAfectacions()
    {
        return $this->hasMany(RiesgosydesastresAppAfectacion::className(), ['id_app_cul_transitorio' => 'id']);
    }
}
