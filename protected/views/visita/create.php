<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Visita', 'url'=>array('index')),
	array('label'=>'Administrar Visita', 'url'=>array('admin')),
);
?>

<h1>Create Visita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>