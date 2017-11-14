<?php
/* @var $this EmployeeHasSkillController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Has Skills',
);

$this->menu=array(
	array('label'=>'Create EmployeeHasSkill', 'url'=>array('create')),
	array('label'=>'Manage EmployeeHasSkill', 'url'=>array('admin')),
);
?>

<h1>Employee Has Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
//    'itemView'=>'admin',
//    'model'=>'$model',
	'itemView'=>'_view',
)); ?>
