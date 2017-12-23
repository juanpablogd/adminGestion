<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\entregaMaterialesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Entrega Materiales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrega-materiales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Entrega Materiales', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'valor',
            'des_entregam',
            'id_app_descripcion',
            'id_app_material',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
