<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\apoyo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apoyo-form">

    <?php $form = ActiveForm::begin(); ?>

<?php
    echo $form->field($model, 'id_app_descripcion')
            ->hiddenInput(['value' => $_GET['id_app_descripcion']])
            ->label(false)
?>
    <?php
        $hoy = date("Y-m-d");   //echo $hoy;
        echo DatePicker::widget([
            'model' => $model,
            'name' => 'fecha_entrega',
            'attribute' => 'fecha_entrega',
            'options' => ['placeholder' => 'Seleccione fecha de entrega...'],
            'form' => $form,
            'value' => $hoy,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <?= $form->field($model, 'subsidio_arriendo')->textInput() ?>

    <?= $form->field($model, 'menajes')->textInput() ?>

    <?= $form->field($model, 'aport_alimentacion')->textInput() ?>

    <?= $form->field($model, 'materiales_const')->textInput() ?>

    <?= $form->field($model, 'sacos')->textInput() ?>

    <?= $form->field($model, 'otros')->textInput() ?>

    <?= $form->field($model, 'trasnf_economicas')->textInput() ?>

    <?= $form->field($model, 'recurs_ejecutados')->textInput() ?>

    <?= $form->field($model, 'objeto_fngr')->textInput() ?>

    <?= $form->field($model, 'apoyo_fngr_recuperacion')->textInput() ?>

    <?= $form->field($model, 'aport_munucipio')->textInput() ?>

    <?= $form->field($model, 'aport_bomberos')->textInput() ?>

    <?= $form->field($model, 'aport_epc')->textInput() ?>

    <?= $form->field($model, 'aport_fuerz_armadas')->textInput() ?>

    <?= $form->field($model, 'aport_defen_civil')->textInput() ?>

    <?= $form->field($model, 'aport_car')->textInput() ?>

    <?= $form->field($model, 'aport_otras')->textInput() ?>

    <?= $form->field($model, 'don_nacionanles')->textInput() ?>

    <?= $form->field($model, 'don_internacional')->textInput() ?>

    <?= $form->field($model, 'don_otras')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
