<?php
/* @var $this GroupHasEmployeeController */
/* @var $model GroupHasEmployee */

$this->breadcrumbs=array(
	'Group Has Employees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupHasEmployee', 'url'=>array('index')),
	array('label'=>'Manage GroupHasEmployee', 'url'=>array('admin')),
);
?>

<h1>Create GroupHasEmployee</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>