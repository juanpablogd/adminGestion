<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\culHortalizasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cul Hortalizas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-hortalizas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cul Hortalizas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cultivo_hor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
