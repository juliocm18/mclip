<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('admin'),	
	'Actualizar',
);

$this->menu=array(
	
	array('label'=>'Crear Visita', 'url'=>array('create')),	
	array('label'=>'Administrar Visita', 'url'=>array('admin')),
);
?>

<h1>Actualizar Visita</h1>

<?php $this->renderPartial('_form_update', array('model'=>$model)); ?>