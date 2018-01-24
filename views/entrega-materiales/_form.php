<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\material;

/* @var $this yii\web\View */
/* @var $model app\models\entregaMateriales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entrega-materiales-form">

<?php
    echo $form->field($model, 'id_app_descripcion')
            ->hiddenInput(['value' => $_GET['id_app_descripcion']])
            ->label(false)
?>

    <?php $form = ActiveForm::begin(); ?>

<?php    // Normal select with ActiveForm & model
     echo $form->field($model, 'id_app_material')->widget(Select2::classname(), [
         'data' => ArrayHelper::map(material::find()->orderBy(['des_material'=>SORT_ASC])->all(),'id','des_material'),
         'language' => 'es',
         'options' => ['placeholder' => 'Seleccione un material ...'],
         'pluginOptions' => [
             'allowClear' => true
         ],
     ]); 
?>

    <?= $form->field($model, 'des_entregam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
