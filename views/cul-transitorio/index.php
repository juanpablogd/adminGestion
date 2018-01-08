<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\culTransitorioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cultivos Transitorios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-transitorio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Cultivo Transitorio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cultivo_tra',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
