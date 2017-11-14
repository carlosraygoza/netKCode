<?php
/* @var $this SkillHasSkillController */
/* @var $model SkillHasSkill */

$this->breadcrumbs=array(
	'Skill Has Skills'=>array('index'),
	$model->idSkill_has_Skill=>array('view','id'=>$model->idSkill_has_Skill),
	'Update',
);

$this->menu=array(
	array('label'=>'List SkillHasSkill', 'url'=>array('index')),
	array('label'=>'Create SkillHasSkill', 'url'=>array('create')),
	array('label'=>'View SkillHasSkill', 'url'=>array('view', 'id'=>$model->idSkill_has_Skill)),
	array('label'=>'Manage SkillHasSkill', 'url'=>array('admin')),
);
?>

<h1>Update SkillHasSkill <?php echo $model->idSkill_has_Skill; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>