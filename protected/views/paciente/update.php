<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),	
	'Actualizar',
);

$this->menu=array(
	
	array('label'=>'Crear Paciente', 'url'=>array('create')),	
	array('label'=>'Administrar Paciente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Paciente</h1>

<?php $this->renderPartial('_form_update', array('model'=>$model)); ?>