<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\apoyo */

$this->title = 'Actualizar Apoyo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Descripción', 'url' => ['descripcion/index']];
$this->params['breadcrumbs'][] = ['label' => 'Apoyos', 'url' => ['index', 'id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'id_app_descripcion' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="apoyo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
