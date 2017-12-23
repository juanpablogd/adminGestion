<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\culPermanente */

$this->title = 'Update Cul Permanente: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cul Permanentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cul-permanente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
