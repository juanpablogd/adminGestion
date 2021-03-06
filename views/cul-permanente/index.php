<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\culPermanenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cultivos Permanentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-permanente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Cultivo Permanente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cultivo_per',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
