<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\estadoEventos */

$this->title = 'Crear Estado de Eventos';
$this->params['breadcrumbs'][] = ['label' => 'Estado Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-eventos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
