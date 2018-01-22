<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\seguimiento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Descripción', 'url' => ['descripcion/index']];
$this->params['breadcrumbs'][] = ['label' => 'Seguimientos', 'url' => ['index','id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-view">

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
            'tramite_ungrd',
            'atendido',
            'num_memorando',
            'analisis_solicitud',
            'organis_intervencion',
            'fecha',
        ],
    ]) ?>

</div>
