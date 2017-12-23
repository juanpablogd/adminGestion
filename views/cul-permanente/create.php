<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\culPermanente */

$this->title = 'Create Cul Permanente';
$this->params['breadcrumbs'][] = ['label' => 'Cul Permanentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-permanente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
