<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\decreto */

$this->title = 'Crear Decreto';
$this->params['breadcrumbs'][] = ['label' => 'Descripción', 'url' => ['descripcion/index']];
$this->params['breadcrumbs'][] = ['label' => 'Decretos', 'url' => ['index', 'id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
