<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\culPermanente */

$this->title = 'Actualizar Cultivo Permanente: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cultivos Permanentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cul-permanente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
