<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_cul_frutales".
 *
 * @property integer $id
 * @property string $cultivo_fru
 *
 * @property RiesgosydesastresAppAfectacion[] $riesgosydesastresAppAfectacions
 */
class culFrutales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_cul_frutales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cultivo_fru'], 'required'],
            [['cultivo_fru'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cultivo_fru' => 'Cultivo Fru',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppAfectacions()
    {
        return $this->hasMany(RiesgosydesastresAppAfectacion::className(), ['id_app_cul_frutales' => 'id']);
    }
}
