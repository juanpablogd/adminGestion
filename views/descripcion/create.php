<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\descripcion */

$this->title = 'Create Descripcion';
$this->params['breadcrumbs'][] = ['label' => 'Descripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="descripcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
