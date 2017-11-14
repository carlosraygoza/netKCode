<?php
/* @var $this SkillHasSkillController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Skill Has Skills',
);

$this->menu=array(
	array('label'=>'Create SkillHasSkill', 'url'=>array('create')),
	array('label'=>'Manage SkillHasSkill', 'url'=>array('admin')),
);
?>

<h1>Skill Has Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
