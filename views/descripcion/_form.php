<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use app\models\municipio;
use app\models\vereda;
use app\models\eventos;
use app\models\estadoEventos;
use app\models\tipoIncendio;
/* @var $this yii\web\View */
/* @var $model app\models\descripcion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="descripcion-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'id_app_eventos')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(eventos::find()->orderBy(['evento'=>SORT_ASC])->all(),'id','evento'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un evento ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'id_app_estado_evento')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(estadoEventos::find()->orderBy(['estado'=>SORT_ASC])->all(),'id','estado'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un estado ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'id_app_tipo_incencio')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(tipoIncendio::find()->orderBy(['tipo_incendio'=>SORT_ASC])->all(),'id','tipo_incendio'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un tipo de tipo_incendio ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php
        echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'fecha_reporte',
            'options' => ['placeholder' => 'Seleccione fecha de reporte...'],
            'form' => $form,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>
    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'codigo_mun')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(municipio::find()->orderBy(['nombre_mun'=>SORT_ASC])->all(),'codigo_mun','nombre_mun'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un municipio ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
            'pluginEvents' => [
                'change' => 'function() {
                    $.post("index.php?r=vereda/lista&id='.'"+$(this).val(),function(data){
                        $("#descripcion-id_vereda").html(data);
                        //console.log(data);
                        })  
                }',
            ]
        ]); 
    ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'id_vereda')->dropDownList(
            ArrayHelper::map(vereda::find()->orderBy(['nombre_ver'=>SORT_ASC])->limit(1)->all(),'gid','nombre_ver'),
            [
                'prompt' => 'Seleccione un vereda ...',
            ]
        );

    ?>



    <?= $form->field($model, 'barrio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'punto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitud')->textInput() ?>

    <?= $form->field($model, 'longitud')->textInput() ?>

    <?php
        echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'fecha_inicio',
            'options' => ['placeholder' => 'Seleccione fecha de Inicio...'],
            'form' => $form,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <?php
        echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'fecha_reporte',
            'options' => ['placeholder' => 'Seleccione fecha de Culminación...'],
            'form' => $form,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <?= $form->field($model, 'acciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'responsable_atencion')->textInput() ?>

    <?= $form->field($model, 'descripcion_atencion')->textInput() ?>

    <?= $form->field($model, 'comentarios')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
