<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\afectacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="afectacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_app_descripcion') ?>

    <?= $form->field($model, 'no_muertos') ?>

    <?= $form->field($model, 'no_heridos') ?>

    <?= $form->field($model, 'no_desaparecidos') ?>

    <?php // echo $form->field($model, 'no_personas') ?>

    <?php // echo $form->field($model, 'no_familias') ?>

    <?php // echo $form->field($model, 'no_ninos') ?>

    <?php // echo $form->field($model, 'no_ancianos') ?>

    <?php // echo $form->field($model, 'no_viviendas_destruidas') ?>

    <?php // echo $form->field($model, 'no_viviendas_averiadas') ?>

    <?php // echo $form->field($model, 'no_vias') ?>

    <?php // echo $form->field($model, 'no_ptes_vehi') ?>

    <?php // echo $form->field($model, 'no_ptes_peato') ?>

    <?php // echo $form->field($model, 'no_acueductos') ?>

    <?php // echo $form->field($model, 'no_alcantarillados') ?>

    <?php // echo $form->field($model, 'no_plan_tratamiento_potable') ?>

    <?php // echo $form->field($model, 'no_plan_tratamiento_residu') ?>

    <?php // echo $form->field($model, 'no_c_salud') ?>

    <?php // echo $form->field($model, 'no_c_educativos') ?>

    <?php // echo $form->field($model, 'no_c_comunitarios') ?>

    <?php // echo $form->field($model, 'no_e_panelera') ?>

    <?php // echo $form->field($model, 'no_bosq_natural') ?>

    <?php // echo $form->field($model, 'no_bosq_inter') ?>

    <?php // echo $form->field($model, 'no_bos_plantado') ?>

    <?php // echo $form->field($model, 'no_bos_seco') ?>

    <?php // echo $form->field($model, 'no_paramo') ?>

    <?php // echo $form->field($model, 'no_sabana') ?>

    <?php // echo $form->field($model, 'no_pastos') ?>

    <?php // echo $form->field($model, 'no_rastrojo') ?>

    <?php // echo $form->field($model, 'no_vegetacion') ?>

    <?php // echo $form->field($model, 'no_seca') ?>

    <?php // echo $form->field($model, 'no_bovinos') ?>

    <?php // echo $form->field($model, 'no_caprinos') ?>

    <?php // echo $form->field($model, 'no_porcinos') ?>

    <?php // echo $form->field($model, 'no_equinos') ?>

    <?php // echo $form->field($model, 'no_aves') ?>

    <?php // echo $form->field($model, 'no_peces') ?>

    <?php // echo $form->field($model, 'id_app_cul_transitorio') ?>

    <?php // echo $form->field($model, 'no_cul_transitorio') ?>

    <?php // echo $form->field($model, 'id_app_cul_permanente') ?>

    <?php // echo $form->field($model, 'no_cul_permanente') ?>

    <?php // echo $form->field($model, 'id_app_cul_hortalizas') ?>

    <?php // echo $form->field($model, 'no_cul_hortalizas') ?>

    <?php // echo $form->field($model, 'id_app_cul_otras_hortalizas') ?>

    <?php // echo $form->field($model, 'no_cul_otras_hortalizas') ?>

    <?php // echo $form->field($model, 'id_app_cul_frutales') ?>

    <?php // echo $form->field($model, 'no_cul_frutales') ?>

    <?php // echo $form->field($model, 'no_frutales_disper') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
