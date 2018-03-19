<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Administrador de información';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <div class="list-group">
        	<a href="index.php?r=descripcion/index" class="list-group-item">Descripción del Evento</a> <br><br>

        	
			<a href="index.php?r=estado-eventos/index" class="list-group-item">Estado Evento</a>
			<a href="index.php?r=eventos/index" class="list-group-item">Eventos</a>
			<a href="index.php?r=eventos/index" class="list-group-item">Tipo de incendio</a><br>

			<a href="index.php?r=cul-frutales/index" class="list-group-item">Cultivos Frutales</a>
			<a href="index.php?r=cul-hortalizas/index" class="list-group-item">Cultivos Hortalizas</a>
			<a href="index.php?r=cul-otras-hortalizas/index" class="list-group-item">Cultivos Otras Hortalizas</a>
			<a href="index.php?r=cul-permanente/index" class="list-group-item">Cultivos Permanentes</a>
			<a href="index.php?r=cul-transitorio/index" class="list-group-item">Cultivos transitorios</a>
			
		</div>
    </p>

</div>
