<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
//	'Skills'=>array('index'),
//	'Create',
);

$this->menu=array(
	array('label'=>'List Skill', 'url'=>array('index')),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>

<h1>Add Skill</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>