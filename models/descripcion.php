<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgosydesastres.app_descripcion".
 *
 * @property integer $id
 * @property integer $id_app_eventos
 * @property string $fecha_reporte
 * @property string $barrio
 * @property string $punto
 * @property string $latitud
 * @property string $longitud
 * @property string $fecha_inicio
 * @property string $fecha_culminacion
 * @property integer $id_app_estado_evento
 * @property string $acciones
 * @property string $comentarios
 * @property integer $responsable_atencion
 * @property string $descripcion_atencion
 * @property integer $id_app_tipo_incencio
 * @property string $codigo_mun
 * @property integer $id_vereda
 *
 * @property RiesgosydesastresAppAfectacion $riesgosydesastresAppAfectacion
 * @property RiesgosydesastresAppApoyo $riesgosydesastresAppApoyo
 * @property RiesgosydesastresAppDecreto[] $riesgosydesastresAppDecretos
 * @property AdministrativaGMunicipioSimp $codigoMun
 * @property vereda $idVereda
 * @property RiesgosydesastresAppEstadoEvento $idAppEstadoEvento
 * @property RiesgosydesastresAppEventos $idAppEventos
 * @property RiesgosydesastresAppTipoIncendio $idAppTipoIncencio
 * @property RiesgosydesastresAppEntregaMateriales[] $riesgosydesastresAppEntregaMateriales
 * @property RiesgosydesastresAppSeguimiento[] $riesgosydesastresAppSeguimientos
 */
class descripcion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgosydesastres.app_descripcion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_app_eventos', 'id_app_estado_evento', 'acciones', 'responsable_atencion', 'descripcion_atencion'], 'required'],
            [['id_app_eventos', 'id_app_estado_evento', 'responsable_atencion', 'id_app_tipo_incencio', 'id_vereda'], 'integer'],
            [['fecha_reporte', 'fecha_inicio', 'fecha_culminacion'], 'safe'],
            [['latitud', 'longitud'], 'number'],
            [['acciones', 'comentarios', 'descripcion_atencion'], 'string'],
            [['barrio'], 'string', 'max' => 200],
            [['punto'], 'string', 'max' => 1000],
            [['codigo_mun'], 'string', 'max' => 5],
            [['codigo_mun'], 'exist', 'skipOnError' => true, 'targetClass' => municipio::className(), 'targetAttribute' => ['codigo_mun' => 'codigo_mun']],
			[['id_vereda'], 'exist', 'skipOnError' => true, 'targetClass' => vereda::className(), 'targetAttribute' => ['id_vereda' => 'gid']],
            [['id_app_estado_evento'], 'exist', 'skipOnError' => true, 'targetClass' => estadoEventos::className(), 'targetAttribute' => ['id_app_estado_evento' => 'id']],
            [['id_app_eventos'], 'exist', 'skipOnError' => true, 'targetClass' => eventos::className(), 'targetAttribute' => ['id_app_eventos' => 'id']],
            [['id_app_tipo_incencio'], 'exist', 'skipOnError' => true, 'targetClass' => tipoIncendio::className(), 'targetAttribute' => ['id_app_tipo_incencio' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_app_eventos' => 'Evento',
            'fecha_reporte' => 'Fecha Reporte',
            'barrio' => 'Barrio',
            'punto' => 'Punto',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_culminacion' => 'Fecha Culminacion',
            'id_app_estado_evento' => 'Id App Estado Evento',
            'acciones' => 'Acciones',
            'comentarios' => 'Comentarios',
            'responsable_atencion' => 'Responsable Atencion',
            'descripcion_atencion' => 'Descripcion Atencion',
            'id_app_tipo_incencio' => 'Id App Tipo Incencio',
            'codigo_mun' => 'Codigo Mun',
            'id_vereda' => 'Id Vereda',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppAfectacion()
    {
        return $this->hasOne(RiesgosydesastresAppAfectacion::className(), ['id_app_descripcion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppApoyo()
    {
        return $this->hasOne(RiesgosydesastresAppApoyo::className(), ['id_app_descripcion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppDecretos()
    {
        return $this->hasMany(RiesgosydesastresAppDecreto::className(), ['id_app_descripcion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoMun()
    {
        return $this->hasOne(municipio::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVereda()
    {
        return $this->hasOne(vereda::className(), ['gid' => 'id_vereda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppEstadoEvento()
    {
        return $this->hasOne(estadoEventos::className(), ['id' => 'id_app_estado_evento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppEventos()
    {
        return $this->hasOne(eventos::className(), ['id' => 'id_app_eventos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAppTipoIncencio()
    {
        return $this->hasOne(tipoIncendio::className(), ['id' => 'id_app_tipo_incencio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppEntregaMateriales()
    {
        return $this->hasMany(RiesgosydesastresAppEntregaMateriales::className(), ['id_app_descripcion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgosydesastresAppSeguimientos()
    {
        return $this->hasMany(RiesgosydesastresAppSeguimiento::className(), ['id_app_descripcion' => 'id']);
    }
}
