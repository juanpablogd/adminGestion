<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\apoyoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apoyo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_app_descripcion') ?>

    <?= $form->field($model, 'subsidio_arriendo') ?>

    <?= $form->field($model, 'menajes') ?>

    <?= $form->field($model, 'aport_alimentacion') ?>

    <?php // echo $form->field($model, 'materiales_const') ?>

    <?php // echo $form->field($model, 'sacos') ?>

    <?php // echo $form->field($model, 'otros') ?>

    <?php // echo $form->field($model, 'trasnf_economicas') ?>

    <?php // echo $form->field($model, 'recurs_ejecutados') ?>

    <?php // echo $form->field($model, 'fecha_entrega') ?>

    <?php // echo $form->field($model, 'objeto_fngr') ?>

    <?php // echo $form->field($model, 'apoyo_fngr_recuperacion') ?>

    <?php // echo $form->field($model, 'aport_munucipio') ?>

    <?php // echo $form->field($model, 'aport_bomberos') ?>

    <?php // echo $form->field($model, 'aport_epc') ?>

    <?php // echo $form->field($model, 'aport_fuerz_armadas') ?>

    <?php // echo $form->field($model, 'aport_defen_civil') ?>

    <?php // echo $form->field($model, 'aport_car') ?>

    <?php // echo $form->field($model, 'aport_otras') ?>

    <?php // echo $form->field($model, 'don_nacionanles') ?>

    <?php // echo $form->field($model, 'don_internacional') ?>

    <?php // echo $form->field($model, 'don_otras') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
