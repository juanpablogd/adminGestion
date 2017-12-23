<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\apoyoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apoyos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoyo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apoyo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_app_descripcion',
            'subsidio_arriendo',
            'menajes',
            'aport_alimentacion',
            // 'materiales_const',
            // 'sacos',
            // 'otros',
            // 'trasnf_economicas',
            // 'recurs_ejecutados',
            // 'fecha_entrega',
            // 'objeto_fngr',
            // 'apoyo_fngr_recuperacion',
            // 'aport_munucipio',
            // 'aport_bomberos',
            // 'aport_epc',
            // 'aport_fuerz_armadas',
            // 'aport_defen_civil',
            // 'aport_car',
            // 'aport_otras',
            // 'don_nacionanles',
            // 'don_internacional',
            // 'don_otras',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
