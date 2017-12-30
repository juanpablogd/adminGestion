<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\culFrutalesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cul Frutales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-frutales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cul Frutales', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cultivo_fru',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>