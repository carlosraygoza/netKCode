<?php
/* @var $this EmployeeHasSkillController */
/* @var $model EmployeeHasSkill */

$this->breadcrumbs=array(
	'Employee Has Skills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmployeeHasSkill', 'url'=>array('index')),
	array('label'=>'Manage EmployeeHasSkill', 'url'=>array('admin')),
);
?>

<!--<h1>Create EmployeeHasSkill</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model, 'idSkill'=> $idSkill, 'idEmployee'=>$idEmployee)); ?>