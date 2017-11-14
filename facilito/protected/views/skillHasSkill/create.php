<?php
/* @var $this SkillHasSkillController */
/* @var $model SkillHasSkill */

$this->breadcrumbs=array(
	'Skill Has Skills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SkillHasSkill', 'url'=>array('index')),
	array('label'=>'Manage SkillHasSkill', 'url'=>array('admin')),
);
?>

<h1>Create SkillHasSkill</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>