<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\culTransitorio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cul-transitorio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cultivo_tra')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
