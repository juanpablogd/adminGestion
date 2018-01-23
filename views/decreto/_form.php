<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\decreto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decreto-form">

    <?php $form = ActiveForm::begin(); ?>

<?php
    echo $form->field($model, 'id_app_descripcion')
            ->hiddenInput(['value' => $_GET['id_app_descripcion']])
            ->label(false)
?>

    <?= $form->field($model, 'no_decreto')->textInput() ?>

    <?php
        $hoy = date("Y-m-d");   //echo $hoy;
        echo DatePicker::widget([
            'model' => $model,
            'name' => 'fecha_inicio',
            'attribute' => 'fecha_inicio',
            'options' => ['placeholder' => 'Seleccione fecha de Inicio ...'],
            'form' => $form,
            'value' => $hoy,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <?php
        $hoy = date("Y-m-d");   //echo $hoy;
        echo DatePicker::widget([
            'model' => $model,
            'name' => 'fecha_final',
            'attribute' => 'fecha_final',
            'options' => ['placeholder' => 'Seleccione fecha Final ...'],
            'form' => $form,
            'value' => $hoy,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <?= $form->field($model, 'plan_accion')->textInput() ?>

    <?= $form->field($model, 'elaboro_edan')->textInput() ?>

    <?= $form->field($model, 'rud')->textInput(['maxlength' => true]) ?>
 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
