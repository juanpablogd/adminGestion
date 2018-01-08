<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\culTransitorio */

$this->title = 'Actualizar Cultivo Transitorio: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cultivos Transitorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cul-transitorio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
