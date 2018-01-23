<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\decretoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Decretos';
$this->params['breadcrumbs'][] = ['label' => 'Descripción', 'url' => ['descripcion/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Decreto', ['create', 'id_app_descripcion' => $_GET['id']], ['class' => 'btn btn-success']) ?>
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
            'no_decreto',
            'fecha_inicio',
            'fecha_final',
            'plan_accion',
            // 'elaboro_edan',
            // 'rud',
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
