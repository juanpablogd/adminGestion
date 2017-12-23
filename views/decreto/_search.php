<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\decretoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decreto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_decreto') ?>

    <?= $form->field($model, 'fecha_inicio') ?>

    <?= $form->field($model, 'fecha_final') ?>

    <?= $form->field($model, 'plan_accion') ?>

    <?php // echo $form->field($model, 'elaboro_edan') ?>

    <?php // echo $form->field($model, 'rud') ?>

    <?php // echo $form->field($model, 'id_app_descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
