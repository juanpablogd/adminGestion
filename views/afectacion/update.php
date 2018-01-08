<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\afectacion */

$this->title = 'Actualizar Afectación: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Afectaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="afectacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
