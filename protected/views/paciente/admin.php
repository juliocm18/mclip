<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	/*array('label'=>'Listar Paciente', 'url'=>array('index')),*/
	array('label'=>'Crear Paciente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paciente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Pacientes</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<!-- Le quito el filter-->
<!--'filter'=>$model,-->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paciente-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		'id',
		'nombres',
		'talla',
		'peso',
		'edad',
		'presion',
		/*
		'alergias',
		'observaciones',
		'sexo',
		'fecha_nacimiento',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<div id="statusMsg">
 
</div>