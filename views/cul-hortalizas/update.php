<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\culHortalizas */

$this->title = 'Update Cul Hortalizas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cul Hortalizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cul-hortalizas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
