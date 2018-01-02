<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\vereda */

$this->title = $model->gid;
$this->params['breadcrumbs'][] = ['label' => 'Veredas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vereda-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gid], [
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
            'gid',
            '__gid',
            'nombre_ver',
            'cod_mun',
            'cod_dane',
            'nombre_mun',
            'nombre_lar',
            'st_area_sh',
            'st_length_',
            'geom',
        ],
    ]) ?>

</div>
