<?php
/* @var $this GrouppController */
/* @var $model Groupp */

$this->breadcrumbs=array(
	'Groupps'=>array('index'),
	$model->idGroup,
);

$this->menu=array(
	array('label'=>'List Groupp', 'url'=>array('index')),
	array('label'=>'Create Groupp', 'url'=>array('create')),
	array('label'=>'Update Groupp', 'url'=>array('update', 'id'=>$model->idGroup)),
	array('label'=>'Delete Groupp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGroup),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groupp', 'url'=>array('admin')),
);
?>

<h1>View Groupp #<?php echo $model->idGroup; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGroup',
		'nameGroup',
	),
)); ?>
