<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\descripcionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Descripcions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descripcion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Descripcion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_app_eventos',
            'fecha_reporte',
            'barrio',
            'punto',
            // 'latitud',
            // 'longitud',
            // 'fecha_inicio',
            // 'fecha_culminacion',
            // 'id_app_estado_evento',
            // 'acciones:ntext',
            // 'comentarios:ntext',
            // 'responsable_atencion',
            // 'descripcion_atencion',
            // 'id_app_tipo_incencio',
            // 'codigo_mun',
            // 'id_vereda',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
