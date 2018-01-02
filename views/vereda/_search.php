<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\veredaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vereda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'gid') ?>

    <?= $form->field($model, '__gid') ?>

    <?= $form->field($model, 'nombre_ver') ?>

    <?= $form->field($model, 'cod_mun') ?>

    <?= $form->field($model, 'cod_dane') ?>

    <?php // echo $form->field($model, 'nombre_mun') ?>

    <?php // echo $form->field($model, 'nombre_lar') ?>

    <?php // echo $form->field($model, 'st_area_sh') ?>

    <?php // echo $form->field($model, 'st_length_') ?>

    <?php // echo $form->field($model, 'geom') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
