<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_entrega_materiales".
 *
 * @property integer $id
 * @property string $valor
 * @property string $des_entregam
 * @property integer $id_app_descripcion
 * @property integer $id_app_material
 *
 * @property descripcion $idAppDescripcion
 * @property material $idAppMaterial
 */
class entregaMateriales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_entrega_materiales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor', 'id_app_descripcion', 'id_app_material'], 'integer'],
            [['des_entregam', 'id_app_descripcion', 'id_app_material'], 'required'],
            [['des_entregam'], 'string', 'max' => 500],
            [['id_app_descripcion'], 'exist', 'skipOnError' => true, 'targetClass' => descripcion::className(), 'targetAttribute' => ['id_app_descripcion' => 'id']],
            [['id_app_material'], 'exist', 'skipOnError' => true, 'targetClass' => material::className(), 'targetAttribute' => ['id_app_material' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'valor' => 'Valor',
            'des_entregam' => 'Descripción Entrega Mat.',
            'id_app_descripcion' => 'Descripción',
            'id_app_material' => 'Material',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppDescripcion()
    {
        return $this->hasOne(descripcion::className(), ['id' => 'id_app_descripcion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppMaterial()
    {
        return $this->hasOne(material::className(), ['id' => 'id_app_material']);
    }
}
