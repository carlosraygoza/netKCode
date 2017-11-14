<?php
/* @var $this EmployeeHasSkillController */
/* @var $model EmployeeHasSkill */

$this->breadcrumbs=array(
	'Employee Has Skills'=>array('index'),
	$model->idEhs,
);

$this->menu=array(
	array('label'=>'List EmployeeHasSkill', 'url'=>array('index')),
	array('label'=>'Create EmployeeHasSkill', 'url'=>array('create')),
	array('label'=>'Update EmployeeHasSkill', 'url'=>array('update', 'id'=>$model->idEhs)),
	array('label'=>'Delete EmployeeHasSkill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEhs),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeHasSkill', 'url'=>array('admin')),
);
?>

<h1>View EmployeeHasSkill #<?php echo $model->idEhs; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEhs',
		'idSkill',
		'idEmployee',
		'levelExpertise',
		'levelInterest',
		'IsTrainer',
	),
)); ?>
