<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\descripcion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Descripciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descripcion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
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
        ],
    ]) ?>

</div>
