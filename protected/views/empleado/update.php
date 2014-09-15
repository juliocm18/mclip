<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('admin'),	
	'Actualizar',
);

$this->menu=array(
	
	array('label'=>'Crear Empleado', 'url'=>array('create')),	
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Actualizar Empleado</h1>

<?php $this->renderPartial('_form_update', array('model'=>$model)); ?>