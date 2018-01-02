<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\vereda */

$this->title = 'Create Vereda';
$this->params['breadcrumbs'][] = ['label' => 'Veredas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vereda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
