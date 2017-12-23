<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\descripcionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="descripcion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_app_eventos') ?>

    <?= $form->field($model, 'fecha_reporte') ?>

    <?= $form->field($model, 'barrio') ?>

    <?= $form->field($model, 'punto') ?>

    <?php // echo $form->field($model, 'latitud') ?>

    <?php // echo $form->field($model, 'longitud') ?>

    <?php // echo $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'fecha_culminacion') ?>

    <?php // echo $form->field($model, 'id_app_estado_evento') ?>

    <?php // echo $form->field($model, 'acciones') ?>

    <?php // echo $form->field($model, 'comentarios') ?>

    <?php // echo $form->field($model, 'responsable_atencion') ?>

    <?php // echo $form->field($model, 'descripcion_atencion') ?>

    <?php // echo $form->field($model, 'id_app_tipo_incencio') ?>

    <?php // echo $form->field($model, 'codigo_mun') ?>

    <?php // echo $form->field($model, 'id_vereda') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
