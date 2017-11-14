<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->idEmployee=>array('view','id'=>$model->idEmployee),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'View Employee', 'url'=>array('view', 'id'=>$model->idEmployee)),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Update Employee <?php echo $model->idEmployee; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>