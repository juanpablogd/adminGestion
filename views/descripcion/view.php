<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\descripcion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Descripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descripcion-view">

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
            'id_app_eventos',
            'fecha_reporte',
            'barrio',
            'punto',
            'latitud',
            'longitud',
            'fecha_inicio',
            'fecha_culminacion',
            'id_app_estado_evento',
            'acciones:ntext',
            'comentarios:ntext',
            'responsable_atencion',
            'descripcion_atencion',
            'id_app_tipo_incencio',
            'codigo_mun',
            'id_vereda',
        ],
    ]) ?>

</div>
