<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\afectacion */

$this->title = 'Crear Afectación';
$this->params['breadcrumbs'][] = ['label' => 'Afectaciones', 'url' => ['index', 'id' => $_GET['id_app_descripcion']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afectacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
