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
            'id_caso_secad',
            'des_clas_nueve',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {apoyo} {seguimiento} {materiales} {afectacion} {decreto} {delete}',
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
                    'apoyo' => function($url, $searchModel, $key, $index) {
                            return Html::a('<span class="glyphicon glyphicon-calendar"></span>', $url, [
                                    'title' => 'Ad. Apoyo',])."</br>";
                    }
                ],
                'buttons'  => [
                    'decreto' => function($url) {
                            return Html::a('<span class="glyphicon glyphicon-alert"></span>', $url, [
                                    'title' => 'Ad. Decreto',]);
                    }
                ],
                'buttons'  => [
                    'seguimiento' => function($url, $searchModel) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $searchModel['id']], [
                                    'title' => Yii::t('app', 'Delete'), 'data-confirm' => Yii::t('app', 'Seguro que desea eliminar este elemento?'),'data-method' => 'post']);
                    }
                ],
                'buttons'  => [
                    'materiales' => function($url, $searchModel, $key, $index) {
                            return Html::a('<span class="glyphicon glyphicon-calendar"></span>', $url, [
                                    'title' => 'Ad. Materiales',])."</br>";
                    }
                ],
                'buttons'  => [
                    'afectacion' => function($url) {
                            return Html::a('<span class="glyphicon glyphicon-alert"></span>', $url, [
                                    'title' => 'Ad. Afectación',]);
                    }
                ],
                'urlCreator' => function ($action, $searchModel, $key, $index) {    //echo $action." ";
                    if ($action === 'view') {
                            $url = 'index.php?r=descripcion/view&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'update') {
                            $url = 'index.php?r=descripcion/update&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'apoyo') {
                            $url = 'index.php?r=apoyo/index&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'seguimiento') {
                            $url = 'index.php?r=seguimiento/index&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'materiales') {
                            $url = 'index.php?r=entrega-materiales/index&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'afectacion') {
                            $url = 'index.php?r=afectacion/index&id='.$searchModel['id'];
                            return $url;
                    }
                    if($action === 'decreto') {
                            $url = 'index.php?r=decreto/index&id='.$searchModel['id'];
                            return $url;
                    }
                }
            ],
        ],
    ]); ?>
</div>
