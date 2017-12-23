<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\seguimientoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seguimiento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tramite_ungrd') ?>

    <?= $form->field($model, 'atendido') ?>

    <?= $form->field($model, 'num_memorando') ?>

    <?= $form->field($model, 'analisis_solicitud') ?>

    <?php // echo $form->field($model, 'organis_intervencion') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'id_app_descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
