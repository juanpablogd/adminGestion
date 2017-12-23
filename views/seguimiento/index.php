<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\seguimientoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seguimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Seguimiento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tramite_ungrd',
            'atendido',
            'num_memorando',
            'analisis_solicitud',
            // 'organis_intervencion',
            // 'fecha',
            // 'id_app_descripcion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
