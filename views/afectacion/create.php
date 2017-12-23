<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\afectacion */

$this->title = 'Create Afectacion';
$this->params['breadcrumbs'][] = ['label' => 'Afectacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afectacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
