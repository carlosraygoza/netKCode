<?php
/* @var $this GroupHasEmployeeController */
/* @var $model GroupHasEmployee */

$this->breadcrumbs=array(
	'Group Has Employees'=>array('index'),
	$model->idGhe=>array('view','id'=>$model->idGhe),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupHasEmployee', 'url'=>array('index')),
	array('label'=>'Create GroupHasEmployee', 'url'=>array('create')),
	array('label'=>'View GroupHasEmployee', 'url'=>array('view', 'id'=>$model->idGhe)),
	array('label'=>'Manage GroupHasEmployee', 'url'=>array('admin')),
);
?>

<h1>Update GroupHasEmployee <?php echo $model->idGhe; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>