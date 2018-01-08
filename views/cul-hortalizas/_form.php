<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\culHortalizas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cul-hortalizas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cultivo_hor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
