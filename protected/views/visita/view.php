<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('admin'),
	$model->id,
);

$this->menu=array(	
	array('label'=>'Crear Visita', 'url'=>array('create')),
	array('label'=>'Actualizar Visita', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desea eliminar ?')),
	array('label'=>'Administrar Visita', 'url'=>array('admin')),
);
?>

<h1>Detalle de Visita registrado</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'motivo',
		'descripcion_motivo',
		'diagnostico',
		'descripcion_diagnostico',
		'receta',
		'indicaciones',
		'fecha',
		'Paciente_id',
	),
)); ?>
