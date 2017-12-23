<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\descripcion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="descripcion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_app_eventos')->textInput() ?>

    <?= $form->field($model, 'fecha_reporte')->textInput() ?>

    <?= $form->field($model, 'barrio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'punto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitud')->textInput() ?>

    <?= $form->field($model, 'longitud')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_culminacion')->textInput() ?>

    <?= $form->field($model, 'id_app_estado_evento')->textInput() ?>

    <?= $form->field($model, 'acciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comentarios')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'responsable_atencion')->textInput() ?>

    <?= $form->field($model, 'descripcion_atencion')->textInput() ?>

    <?= $form->field($model, 'id_app_tipo_incencio')->textInput() ?>

    <?= $form->field($model, 'codigo_mun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_vereda')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
