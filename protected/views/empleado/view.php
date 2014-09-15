<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('admin'),
	$model->id,
);

$this->menu=array(	
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Actualizar Empleado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea eliminar ?')),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Detalle de Empleado registrado</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombres',
		'apellidos',
		'dni',
		'email',
	),
)); ?>
