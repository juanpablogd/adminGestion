<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\seguimientoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seguimiento';
$this->params['breadcrumbs'][] = ['label' => 'Descripción', 'url' => ['descripcion/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Apoyo', ['create', 'id_app_descripcion' => $_GET['id']], ['class' => 'btn btn-success']) ?>
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
            'tramite_ungrd',
            'atendido',
            'num_memorando',
            'analisis_solicitud',
            // 'organis_intervencion',
            // 'fecha',
            // 'id_app_descripcion',
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
                            $url = 'index.php?r=apoyo/view&id='.$searchModel['id'].'&id_app_descripcion='.$_GET['id'];
                            return $url;
                    }
                    if($action === 'update') {
                            $url = 'index.php?r=apoyo/update&id='.$searchModel['id'].'&id_app_descripcion='.$_GET['id'];
                            return $url;
                    }
                }
            ],
        ],
    ]); ?>
</div>
