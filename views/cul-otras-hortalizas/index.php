<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\culOtrasHortalizasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cul Otras Hortalizas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-otras-hortalizas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cul Otras Hortalizas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cultivo_oho',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
