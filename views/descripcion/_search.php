<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\descripcionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="descripcion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'evento') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'fecha_reporte') ?>

    <?= $form->field($model, 'nombre_mun') ?>

    <?php  echo $form->field($model, 'fecha_inicio') ?>

    <?php  echo $form->field($model, 'fecha_culminacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
