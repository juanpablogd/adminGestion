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
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {fcontrol} {gesri}',
                'buttons'  => [
                    'view' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'View'),]);
                    }
                ],
                'buttons'  => [
                    'update' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                    'title' => Yii::t('app', 'Update')]);
                    }
                ],
                'buttons'  => [
                    'delete' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $searchModel['id']], [
                                    'title' => Yii::t('app', 'Delete'), 'data-confirm' => Yii::t('app', 'Seguro que desea eliminar este elemento?'),'data-method' => 'post']);
                    }
                ],
                'buttons'  => [
                    'fcontrol' => function($url, $searchModel, $key, $index) {
                            return Html::a('<span class="glyphicon glyphicon-calendar"></span>', $url, [
                                    'title' => 'Ad. Control',])."</br>";
                    }
                ],
                'buttons'  => [
                    'gesri' => function($url) {
                            return Html::a('<span class="glyphicon glyphicon-alert"></span>', $url, [
                                    'title' => 'Ad. Riesgos',]);
                    }
                ],
                'urlCreator' => function ($action, $searchModel, $key, $index) {    //echo $action." ";
                    if ($action === 'view') {
                            $url = 'index.php?r=embarazo/view&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'update') {
                            $url = 'index.php?r=embarazo/update&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'fcontrol') {
                            $url = 'index.php?r=fechacontrol/index&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'gesri') {
                            $url = 'index.php?r=gestanteriesgo/index&id='.$searchModel['id'];
                            return $url;
                    }
                }
            ],
        ],
    ]); ?>
</div>
