<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\culHortalizas */

$this->title = 'Crear cultivo de hortaliza';
$this->params['breadcrumbs'][] = ['label' => 'Cultivos Hortalizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-hortalizas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
