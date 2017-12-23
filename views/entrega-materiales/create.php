<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\entregaMateriales */

$this->title = 'Create Entrega Materiales';
$this->params['breadcrumbs'][] = ['label' => 'Entrega Materiales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrega-materiales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
