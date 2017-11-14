<?php
/* @var $this EmployeeHasSkillController */
/* @var $model EmployeeHasSkill */

$this->breadcrumbs=array(
	'Employee Has Skills'=>array('index'),
	$model->idEhs=>array('view','id'=>$model->idEhs),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmployeeHasSkill', 'url'=>array('index')),
	array('label'=>'Create EmployeeHasSkill', 'url'=>array('create')),
	array('label'=>'View EmployeeHasSkill', 'url'=>array('view', 'id'=>$model->idEhs)),
	array('label'=>'Manage EmployeeHasSkill', 'url'=>array('admin')),
);
?>

<!--<h1>Update EmployeeHasSkill <?php //echo $model->idEhs; ?></h1>-->
<?php $this->renderPartial('_form', array('model'=>$model, 'idSkill'=> $idSkill, 'idEmployee'=>$idEmployee)); ?>