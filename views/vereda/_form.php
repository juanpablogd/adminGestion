<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\vereda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vereda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, '__gid')->textInput() ?>

    <?= $form->field($model, 'nombre_ver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_mun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_dane')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_mun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_lar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'st_area_sh')->textInput() ?>

    <?= $form->field($model, 'st_length_')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
