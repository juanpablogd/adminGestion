<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\culTransitorio */

$this->title = 'Crear Cultivo Transitorio';
$this->params['breadcrumbs'][] = ['label' => 'Cultivos Transitorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-transitorio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
