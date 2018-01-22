<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\apoyo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Descripción', 'url' => ['descripcion/index']];
$this->params['breadcrumbs'][] = ['label' => 'Apoyos', 'url' => ['index','id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoyo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id,'id_app_descripcion' => $_GET['id_app_descripcion']], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id,'id_app_descripcion' => $_GET['id_app_descripcion']], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro que desea eliminar este elemento?',
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
