<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	/*array('label'=>'Listar Visita', 'url'=>array('index')),*/
	array('label'=>'Crear Visita', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#visita-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Visitas</h1>

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
	'id'=>'visita-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		'id',
		'motivo',
		'descripcion_motivo',
		'diagnostico',
		'descripcion_diagnostico',
		'receta',
		/*
		'indicaciones',
		'fecha',
		'Paciente_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<div id="statusMsg">
 
</div>