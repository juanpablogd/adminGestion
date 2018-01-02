<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\veredaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Veredas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vereda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vereda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gid',
            '__gid',
            'nombre_ver',
            'cod_mun',
            'cod_dane',
            // 'nombre_mun',
            // 'nombre_lar',
            // 'st_area_sh',
            // 'st_length_',
            // 'geom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
