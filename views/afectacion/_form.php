<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\culTransitorio;
use app\models\culPermanente;
use app\models\culFrutales;
use app\models\culHortalizas;
use app\models\culOtrasHortalizas;
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

<?php    // Normal select with ActiveForm & model
     echo $form->field($model, 'id_app_cul_transitorio')->widget(Select2::classname(), [
         'data' => ArrayHelper::map(culTransitorio::find()->orderBy(['cultivo_tra'=>SORT_ASC])->all(),'id','cultivo_tra'),
         'language' => 'es',
         'options' => ['placeholder' => 'Seleccione un cultivo transitorio ...'],
         'pluginOptions' => [
             'allowClear' => true
         ],
     ]); 
?>
    <?= $form->field($model, 'no_cul_transitorio')->textInput() ?>

<?php    // Normal select with ActiveForm & model
     echo $form->field($model, 'id_app_cul_permanente')->widget(Select2::classname(), [
         'data' => ArrayHelper::map(culPermanente::find()->orderBy(['cultivo_per'=>SORT_ASC])->all(),'id','cultivo_per'),
         'language' => 'es',
         'options' => ['placeholder' => 'Seleccione un cultivo permanente ...'],
         'pluginOptions' => [
             'allowClear' => true
         ],
     ]); 
?>
    <?= $form->field($model, 'no_cul_permanente')->textInput() ?>

<?php    // Normal select with ActiveForm & model
     echo $form->field($model, 'id_app_cul_hortalizas')->widget(Select2::classname(), [
         'data' => ArrayHelper::map(culHortalizas::find()->orderBy(['cultivo_hor'=>SORT_ASC])->all(),'id','cultivo_hor'),
         'language' => 'es',
         'options' => ['placeholder' => 'Seleccione un cultivo de Hortalizas ...'],
         'pluginOptions' => [
             'allowClear' => true
         ],
     ]); 
?>
    <?= $form->field($model, 'no_cul_hortalizas')->textInput() ?>

<?php    // Normal select with ActiveForm & model
     echo $form->field($model, 'id_app_cul_otras_hortalizas')->widget(Select2::classname(), [
         'data' => ArrayHelper::map(culOtrasHortalizas::find()->orderBy(['cultivo_oho'=>SORT_ASC])->all(),'id','cultivo_oho'),
         'language' => 'es',
         'options' => ['placeholder' => 'Seleccione un cultivo de Otras Hortalizas ...'],
         'pluginOptions' => [
             'allowClear' => true
         ],
     ]); 
?>
    <?= $form->field($model, 'no_cul_otras_hortalizas')->textInput() ?>

<?php    // Normal select with ActiveForm & model
     echo $form->field($model, 'id_app_cul_frutales')->widget(Select2::classname(), [
         'data' => ArrayHelper::map(culFrutales::find()->orderBy(['cultivo_fru'=>SORT_ASC])->all(),'id','cultivo_fru'),
         'language' => 'es',
         'options' => ['placeholder' => 'Seleccione un cultivo Frutal ...'],
         'pluginOptions' => [
             'allowClear' => true
         ],
     ]); 
?>

    <?= $form->field($model, 'no_cul_frutales')->textInput() ?>

    <?= $form->field($model, 'no_frutales_disper')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
