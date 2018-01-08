<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_material".
 *
 * @property integer $id
 * @property string $des_material
 *
 * @property RiesgosydesastresAppEntregaMateriales[] $riesgosydesastresAppEntregaMateriales
 */
class material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['des_material'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'des_material' => 'Descripción Material',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppEntregaMateriales()
    {
        return $this->hasMany(RiesgosydesastresAppEntregaMateriales::className(), ['id_app_material' => 'id']);
    }
}
