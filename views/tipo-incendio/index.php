<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tipoIncendioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipos de Incendio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-incendio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Tipo Incendio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipo_incendio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
