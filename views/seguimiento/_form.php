<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\seguimiento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seguimiento-form">

    <?php $form = ActiveForm::begin(); ?>

<?php
    echo $form->field($model, 'id_app_descripcion')
            ->hiddenInput(['value' => $_GET['id_app_descripcion']])
            ->label(false)
?>

    <?= $form->field($model, 'tramite_ungrd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atendido')->textInput() ?>

    <?= $form->field($model, 'num_memorando')->textInput() ?>

    <?= $form->field($model, 'analisis_solicitud')->textInput() ?>

    <?= $form->field($model, 'organis_intervencion')->textInput() ?>

    <?php
        $hoy = date("Y-m-d");   //echo $hoy;
        echo DatePicker::widget([
            'model' => $model,
            'name' => 'fecha',
            'attribute' => 'fecha',
            'options' => ['placeholder' => 'Seleccione fecha ...'],
            'form' => $form,
            'value' => $hoy,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
