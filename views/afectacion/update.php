<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\afectacion */

$this->title = 'Actualizar Afectación: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Afectaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'id_app_descripcion' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="afectacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
