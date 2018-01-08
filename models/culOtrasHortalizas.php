<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_cul_otras_hortalizas".
 *
 * @property integer $id
 * @property string $cultivo_oho
 *
 * @property RiesgosydesastresAppAfectacion[] $riesgosydesastresAppAfectacions
 */
class culOtrasHortalizas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_cul_otras_hortalizas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cultivo_oho'], 'required'],
            [['cultivo_oho'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cultivo_oho' => 'Cultivo Otras hortalizas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppAfectacions()
    {
        return $this->hasMany(RiesgosydesastresAppAfectacion::className(), ['id_app_cul_otras_hortalizas' => 'id']);
    }
}
