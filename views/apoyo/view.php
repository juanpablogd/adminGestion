<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\apoyo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apoyos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoyo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_app_descripcion',
            'subsidio_arriendo',
            'menajes',
            'aport_alimentacion',
            'materiales_const',
            'sacos',
            'otros',
            'trasnf_economicas',
            'recurs_ejecutados',
            'fecha_entrega',
            'objeto_fngr',
            'apoyo_fngr_recuperacion',
            'aport_munucipio',
            'aport_bomberos',
            'aport_epc',
            'aport_fuerz_armadas',
            'aport_defen_civil',
            'aport_car',
            'aport_otras',
            'don_nacionanles',
            'don_internacional',
            'don_otras',
        ],
    ]) ?>

</div>
