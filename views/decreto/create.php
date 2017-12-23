<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\decreto */

$this->title = 'Create Decreto';
$this->params['breadcrumbs'][] = ['label' => 'Decretos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
