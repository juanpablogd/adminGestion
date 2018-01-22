<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\afectacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Afectación';
$this->params['breadcrumbs'][] = ['label' => 'Descripción', 'url' => ['descripcion/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afectacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear - Afectación', ['create', 'id_app_descripcion' => $_GET['id']], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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
            //'id',
            //'id_app_descripcion',
            'no_muertos',
            'no_heridos',
            'no_desaparecidos',
            // 'no_personas',
            // 'no_familias',
            // 'no_ninos',
            // 'no_ancianos',
            // 'no_viviendas_destruidas',
            // 'no_viviendas_averiadas',
            // 'no_vias',
            // 'no_ptes_vehi',
            // 'no_ptes_peato',
            // 'no_acueductos',
            // 'no_alcantarillados',
            // 'no_plan_tratamiento_potable',
            // 'no_plan_tratamiento_residu',
            // 'no_c_salud',
            // 'no_c_educativos',
            // 'no_c_comunitarios',
            // 'no_e_panelera',
            // 'no_bosq_natural',
            // 'no_bosq_inter',
            // 'no_bos_plantado',
            // 'no_bos_seco',
            // 'no_paramo',
            // 'no_sabana',
            // 'no_pastos',
            // 'no_rastrojo',
            // 'no_vegetacion',
            // 'no_seca',
            // 'no_bovinos',
            // 'no_caprinos',
            // 'no_porcinos',
            // 'no_equinos',
            // 'no_aves',
            // 'no_peces',
            // 'id_app_cul_transitorio',
            // 'no_cul_transitorio',
            // 'id_app_cul_permanente',
            // 'no_cul_permanente',
            // 'id_app_cul_hortalizas',
            // 'no_cul_hortalizas',
            // 'id_app_cul_otras_hortalizas',
            // 'no_cul_otras_hortalizas',
            // 'id_app_cul_frutales',
            // 'no_cul_frutales',
            // 'no_frutales_disper',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons'  => [
                    'view' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'View'),]);
                    }
                ],
                'buttons'  => [
                    'update' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                    'title' => Yii::t('app', 'Update'),]);
                    }
                ],
                'buttons'  => [
                    'delete' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $searchModel['id'], 'id_app_descripcion' => $_GET['id']], [
                                    'title' => 'Borrar', 'data-confirm' => Yii::t('app', 'Desea eliminar este elemento?'),'data-method' => 'post']);
                    }
                ],
                'urlCreator' => function ($action, $searchModel, $key, $index) {
                    if ($action === 'view') {
                            $url = 'index.php?r=afectacion/view&id='.$searchModel['id'].'&id_app_descripcion='.$_GET['id'];
                            return $url;
                    }
                    if($action === 'update') {
                            $url = 'index.php?r=afectacion/update&id='.$searchModel['id'].'&id_app_descripcion='.$_GET['id'];
                            return $url;
                    }
                }
            ],
        ],
    ]); ?>
</div>
