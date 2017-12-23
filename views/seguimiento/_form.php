<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\seguimiento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seguimiento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tramite_ungrd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atendido')->textInput() ?>

    <?= $form->field($model, 'num_memorando')->textInput() ?>

    <?= $form->field($model, 'analisis_solicitud')->textInput() ?>

    <?= $form->field($model, 'organis_intervencion')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'id_app_descripcion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
