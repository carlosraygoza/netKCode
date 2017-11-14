<?php
/* @var $this GrouppController */
/* @var $model Groupp */

$this->breadcrumbs=array(
	'Groupps'=>array('index'),
	$model->idGroup=>array('view','id'=>$model->idGroup),
	'Update',
);

$this->menu=array(
	array('label'=>'List Groupp', 'url'=>array('index')),
	array('label'=>'Create Groupp', 'url'=>array('create')),
	array('label'=>'View Groupp', 'url'=>array('view', 'id'=>$model->idGroup)),
	array('label'=>'Manage Groupp', 'url'=>array('admin')),
);
?>

<h1>Update Groupp <?php echo $model->idGroup; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>