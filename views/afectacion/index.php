<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\afectacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Afectación';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afectacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear - Afectación', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_app_descripcion',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>