<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	$model->id,
);

$this->menu=array(	
	array('label'=>'Crear Paciente', 'url'=>array('create')),
	array('label'=>'Actualizar Paciente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea eliminar ?')),
	array('label'=>'Administrar Paciente', 'url'=>array('admin')),
);
?>

<h1>Detalle de Paciente registrado</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombres',
		'talla',
		'peso',
		'edad',
		'presion',
		'alergias',
		'observaciones',
		'sexo',
		'fecha_nacimiento',
	),
)); ?>
