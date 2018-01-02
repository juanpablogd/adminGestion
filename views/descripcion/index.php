<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\descripcionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Descripción Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descripcion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Descripción', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Evento',
                'format' => 'ntext',
                'attribute'=>'evento',
                'value' => function($model) {
                    return $model->idAppEventos['evento'];
                },
            ],
            [
                'label' => 'Estado',
                'format' => 'ntext',
                'attribute'=>'estado',
                'value' => function($model) {
                    return $model->idAppEstadoEvento['estado'];
                },
            ],
            'fecha_reporte',
            [
                'label' => 'Municipio',
                'format' => 'ntext',
                'attribute'=>'nombre_mun',
                'value' => function($model) {
                    return $model->codigoMun['nombre_mun'];
                },
            ],
            'fecha_inicio',
            'fecha_culminacion',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
