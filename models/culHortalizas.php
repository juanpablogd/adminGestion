<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_cul_hortalizas".
 *
 * @property integer $id
 * @property string $cultivo_hor
 *
 * @property RiesgosydesastresAppAfectacion[] $riesgosydesastresAppAfectacions
 */
class culHortalizas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_cul_hortalizas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cultivo_hor'], 'required'],
            [['cultivo_hor'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cultivo_hor' => 'Cultivo Hor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppAfectacions()
    {
        return $this->hasMany(RiesgosydesastresAppAfectacion::className(), ['id_app_cul_hortalizas' => 'id']);
    }
}
