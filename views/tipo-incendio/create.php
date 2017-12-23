<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tipoIncendio */

$this->title = 'Create Tipo Incendio';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Incendios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-incendio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
