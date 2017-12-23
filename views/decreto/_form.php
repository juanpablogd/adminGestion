<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\decreto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decreto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_decreto')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_final')->textInput() ?>

    <?= $form->field($model, 'plan_accion')->textInput() ?>

    <?= $form->field($model, 'elaboro_edan')->textInput() ?>

    <?= $form->field($model, 'rud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_app_descripcion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
