<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\entregaMateriales */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Entregas', 'url' => ['index','id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = ['label' => 'Entrega Materiales', 'url' => ['index','id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrega-materiales-view">

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
            [
                'label' => 'Material',
                'format' => 'ntext',
                'attribute'=>'des_material',
                'value' => function($model) {
                    return $model->idAppMaterial['des_material'];
                },
            ],
            'valor',
            'des_entregam',
        ],
    ]) ?>

</div>
