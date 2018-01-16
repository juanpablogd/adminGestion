<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\afectacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="afectacion-form">

    <?php $form = ActiveForm::begin(); ?>

<?php
    echo $form->field($model, 'id_app_descripcion')
            ->hiddenInput(['value' => $_GET['id_app_descripcion']])
            ->label(false)
?>

    <?= $form->field($model, 'no_muertos')->textInput() ?>

    <?= $form->field($model, 'no_heridos')->textInput() ?>

    <?= $form->field($model, 'no_desaparecidos')->textInput() ?>

    <?= $form->field($model, 'no_personas')->textInput() ?>

    <?= $form->field($model, 'no_familias')->textInput() ?>

    <?= $form->field($model, 'no_ninos')->textInput() ?>

    <?= $form->field($model, 'no_ancianos')->textInput() ?>

    <?= $form->field($model, 'no_viviendas_destruidas')->textInput() ?>

    <?= $form->field($model, 'no_viviendas_averiadas')->textInput() ?>

    <?= $form->field($model, 'no_vias')->textInput() ?>

    <?= $form->field($model, 'no_ptes_vehi')->textInput() ?>

    <?= $form->field($model, 'no_ptes_peato')->textInput() ?>

    <?= $form->field($model, 'no_acueductos')->textInput() ?>

    <?= $form->field($model, 'no_alcantarillados')->textInput() ?>

    <?= $form->field($model, 'no_plan_tratamiento_potable')->textInput() ?>

    <?= $form->field($model, 'no_plan_tratamiento_residu')->textInput() ?>

    <?= $form->field($model, 'no_c_salud')->textInput() ?>

    <?= $form->field($model, 'no_c_educativos')->textInput() ?>

    <?= $form->field($model, 'no_c_comunitarios')->textInput() ?>

    <?= $form->field($model, 'no_e_panelera')->textInput() ?>

    <?= $form->field($model, 'no_bosq_natural')->textInput() ?>

    <?= $form->field($model, 'no_bosq_inter')->textInput() ?>

    <?= $form->field($model, 'no_bos_plantado')->textInput() ?>

    <?= $form->field($model, 'no_bos_seco')->textInput() ?>

    <?= $form->field($model, 'no_paramo')->textInput() ?>

    <?= $form->field($model, 'no_sabana')->textInput() ?>

    <?= $form->field($model, 'no_pastos')->textInput() ?>

    <?= $form->field($model, 'no_rastrojo')->textInput() ?>

    <?= $form->field($model, 'no_vegetacion')->textInput() ?>

    <?= $form->field($model, 'no_seca')->textInput() ?>

    <?= $form->field($model, 'no_bovinos')->textInput() ?>

    <?= $form->field($model, 'no_caprinos')->textInput() ?>

    <?= $form->field($model, 'no_porcinos')->textInput() ?>

    <?= $form->field($model, 'no_equinos')->textInput() ?>

    <?= $form->field($model, 'no_aves')->textInput() ?>

    <?= $form->field($model, 'no_peces')->textInput() ?>

    <?= $form->field($model, 'id_app_cul_transitorio')->textInput() ?>

    <?= $form->field($model, 'no_cul_transitorio')->textInput() ?>

    <?= $form->field($model, 'id_app_cul_permanente')->textInput() ?>

    <?= $form->field($model, 'no_cul_permanente')->textInput() ?>

    <?= $form->field($model, 'id_app_cul_hortalizas')->textInput() ?>

    <?= $form->field($model, 'no_cul_hortalizas')->textInput() ?>

    <?= $form->field($model, 'id_app_cul_otras_hortalizas')->textInput() ?>

    <?= $form->field($model, 'no_cul_otras_hortalizas')->textInput() ?>

    <?= $form->field($model, 'id_app_cul_frutales')->textInput() ?>

    <?= $form->field($model, 'no_cul_frutales')->textInput() ?>

    <?= $form->field($model, 'no_frutales_disper')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
