<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\descripcion */

$this->title = $model->codigoMun['nombre_mun'];
$this->params['breadcrumbs'][] = ['label' => 'Descripciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descripcion-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro desea eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('+ Apoyo ', ['apoyo/index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('+ Material ', ['entrega-materiales/index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('+ Seguimiento ', ['seguimiento/index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('+ Afectación ', ['afectacion/index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>


    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'id_app_eventos',
                 'value' => function($model) {
                     return $model->idAppEventos['evento'];
                 },
            ],
            [
                'attribute' => 'id_app_estado_evento',
                'value' => function($model) {
                    return $model->idAppEstadoEvento['estado'];
                },
            ],
            [
                'attribute' => 'id_app_tipo_incencio',
                'value' => function($model) {
                    return $model->idAppTipoIncencio['tipo_incendio'];
                },
             ],
            [
                'attribute' => 'codigo_mun',
                'value' => function($model) {
                    return $model->codigoMun['nombre_mun'];
                },
             ],
            [
                'attribute' => 'id_vereda',
                'value' => function($model) {
                    return $model->idVereda['nombre_ver'];
                },
             ],
            'fecha_reporte',
            'barrio',
            'punto',
            'latitud',
            'longitud',
            'fecha_inicio',
            'fecha_culminacion',
            'acciones:ntext',
            'comentarios:ntext',
            'responsable_atencion',
            'descripcion_atencion',
            'id_caso_secad',
            'clas_nueve',
            'des_clas_nueve',
            'telefono'
        ],
    ]) ?>

    <h4> Apoyo </h4>

    <?= DetailView::widget([
        'model' => $modelapoyo,
        'attributes' => [
            'fecha_entrega',
            [
                'format' => 'Decimal',
                'attribute' => 'subsidio_arriendo',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'menajes',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_alimentacion',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'materiales_const',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'sacos',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'otros',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'trasnf_economicas',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'recurs_ejecutados',
            ],
            'objeto_fngr',
            [
                'format' => 'Decimal',
                'attribute' => 'apoyo_fngr_recuperacion',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_munucipio',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_bomberos',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_epc',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_fuerz_armadas',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_defen_civil',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_car',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'aport_otras',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'don_nacionanles',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'don_internacional',
            ],
            [
                'format' => 'Decimal',
                'attribute' => 'don_otras',
            ],
        ],
    ]) ?> 


</div>
