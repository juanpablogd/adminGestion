<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\afectacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Afectacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afectacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_app_descripcion',
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
            'id_app_cul_transitorio',
            'no_cul_transitorio',
            'id_app_cul_permanente',
            'no_cul_permanente',
            'id_app_cul_hortalizas',
            'no_cul_hortalizas',
            'id_app_cul_otras_hortalizas',
            'no_cul_otras_hortalizas',
            'id_app_cul_frutales',
            'no_cul_frutales',
            'no_frutales_disper',
        ],
    ]) ?>

</div>
