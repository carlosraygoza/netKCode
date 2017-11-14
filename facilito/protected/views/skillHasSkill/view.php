<?php
/* @var $this SkillHasSkillController */
/* @var $model SkillHasSkill */

$this->breadcrumbs=array(
	'Skill Has Skills'=>array('index'),
	$model->idSkill_has_Skill,
);

$this->menu=array(
	array('label'=>'List SkillHasSkill', 'url'=>array('index')),
	array('label'=>'Create SkillHasSkill', 'url'=>array('create')),
	array('label'=>'Update SkillHasSkill', 'url'=>array('update', 'id'=>$model->idSkill_has_Skill)),
	array('label'=>'Delete SkillHasSkill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSkill_has_Skill),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SkillHasSkill', 'url'=>array('admin')),
);
?>

<h1>View SkillHasSkill #<?php echo $model->idSkill_has_Skill; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSkill_has_Skill',
		'idSkill_parent',
		'idSkill_child',
	),
)); ?>
