<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\culOtrasHortalizas */

$this->title = 'Update Cul Otras Hortalizas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cul Otras Hortalizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cul-otras-hortalizas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
