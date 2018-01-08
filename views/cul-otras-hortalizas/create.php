<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\culOtrasHortalizas */

$this->title = 'Crear Cultivo Otras Hortalizas';
$this->params['breadcrumbs'][] = ['label' => 'Cultivos Otras Hortalizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-otras-hortalizas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
