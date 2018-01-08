<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_cul_permanente".
 *
 * @property integer $id
 * @property string $cultivo_per
 *
 * @property RiesgosydesastresAppAfectacion[] $riesgosydesastresAppAfectacions
 */
class culPermanente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_cul_permanente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cultivo_per'], 'required'],
            [['cultivo_per'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cultivo_per' => 'Cultivo Permanente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppAfectacions()
    {
        return $this->hasMany(RiesgosydesastresAppAfectacion::className(), ['id_app_cul_permanente' => 'id']);
    }
}
