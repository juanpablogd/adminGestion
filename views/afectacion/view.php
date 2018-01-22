<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\afectacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Afectaciones', 'url' => ['index','id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afectacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id,'id_app_descripcion' => $_GET['id_app_descripcion']], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id,'id_app_descripcion' => $_GET['id_app_descripcion']], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro que desea Eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'F. inicio',
                'format' => 'ntext',
                'attribute'=>'fecha_inicio',
                'value' => function($model) {
                    return $model->idAppDescripcion['fecha_inicio'];
                },
            ],
            [
                'label' => 'Evento',
                'format' => 'ntext',
                'attribute'=>'evento',
                'value' => function($model) {
                    return $model->idAppDescripcion->idAppEventos['evento'];
                },
            ],
            [
                'label' => 'Municipio',
                'format' => 'ntext',
                'attribute'=>'nombre_mun',
                'value' => function($model) {
                    return $model->idAppDescripcion->codigoMun['nombre_mun'];
                },
            ],
            'no_muertos',
            'no_heridos',
            'no_desaparecidos',
            'no_personas',
            'no_familias',
            'no_ninos',
            'no_ancianos',
            'no_viviendas_destruidas',
            'no_viviendas_averiadas',
            'no_vias',
            'no_ptes_vehi',
            'no_ptes_peato',
            'no_acueductos',
            'no_alcantarillados',
            'no_plan_tratamiento_potable',
            'no_plan_tratamiento_residu',
            'no_c_salud',
            'no_c_educativos',
            'no_c_comunitarios',
            'no_e_panelera',
            'no_bosq_natural',
            'no_bosq_inter',
            'no_bos_plantado',
            'no_bos_seco',
            'no_paramo',
            'no_sabana',
            'no_pastos',
            'no_rastrojo',
            'no_vegetacion',
            'no_seca',
            'no_bovinos',
            'no_caprinos',
            'no_porcinos',
            'no_equinos',
            'no_aves',
            'no_peces',
            [
                'label' => 'Cul. Transitorio',
                'format' => 'ntext',
                'attribute'=>'cultivo_tra',
                'value' => function($model) {
                    return $model->idAppCulTransitorio['cultivo_tra'];
                },
            ],
            'no_cul_transitorio',
            [
                'label' => 'Cul. Permanente',
                'format' => 'ntext',
                'attribute'=>'cultivo_per',
                'value' => function($model) {
                    return $model->idAppCulPermanente['cultivo_per'];
                },
            ],
            'no_cul_permanente',
            [
                'label' => 'Cul. Hortalizas',
                'format' => 'ntext',
                'attribute'=>'cultivo_hor',
                'value' => function($model) {
                    return $model->idAppCulHortalizas['cultivo_hor'];
                },
            ],
            'no_cul_hortalizas',
            [
                'label' => 'Cul. Otras Hortalizas',
                'format' => 'ntext',
                'attribute'=>'cultivo_oho',
                'value' => function($model) {
                    return $model->idAppCulOtrasHortalizas['cultivo_oho'];
                },
            ],
            'no_cul_otras_hortalizas',
            [
                'label' => 'Cul. Frutales',
                'format' => 'ntext',
                'attribute'=>'cultivo_fru',
                'value' => function($model) {
                    return $model->idAppCulFrutales['cultivo_fru'];
                },
            ],
            'no_cul_frutales',
            'no_frutales_disper',
        ],
    ]) ?>

</div>
