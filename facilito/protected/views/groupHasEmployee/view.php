<?php
/* @var $this GroupHasEmployeeController */
/* @var $model GroupHasEmployee */

$this->breadcrumbs=array(
	'Group Has Employees'=>array('index'),
	$model->idGhe,
);

$this->menu=array(
	array('label'=>'List GroupHasEmployee', 'url'=>array('index')),
	array('label'=>'Create GroupHasEmployee', 'url'=>array('create')),
	array('label'=>'Update GroupHasEmployee', 'url'=>array('update', 'id'=>$model->idGhe)),
	array('label'=>'Delete GroupHasEmployee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGhe),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupHasEmployee', 'url'=>array('admin')),
);
?>

<h1>View GroupHasEmployee #<?php echo $model->idGhe; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGhe',
		'idGroup',
		'idEmployee',
		'isAdmin',
	),
)); ?>
