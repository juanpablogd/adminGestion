<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\apoyo */

$this->title = 'Create Apoyo';
$this->params['breadcrumbs'][] = ['label' => 'Apoyos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apoyo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
