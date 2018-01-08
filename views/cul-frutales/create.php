<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\culFrutales */

$this->title = 'Crear Cultivo Frutal';
$this->params['breadcrumbs'][] = ['label' => 'Cultivos Frutales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-frutales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
