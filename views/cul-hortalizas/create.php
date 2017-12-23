<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\culHortalizas */

$this->title = 'Create Cul Hortalizas';
$this->params['breadcrumbs'][] = ['label' => 'Cul Hortalizas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cul-hortalizas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
